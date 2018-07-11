<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchEngine extends Model
{
    public $data_config = [];
    public function getConfig($action='config') {
        if(isset($this->data_config[$action])===false)
            $this->data_config[$action] = config('search.'.$action);
        return $this->data_config[$action];
    }

    public function detectFunc($needDetect, $item='', $item2='') {
        if(is_callable($needDetect)) return $needDetect($item, $item2);
        else return $needDetect;
    }

    public function getDomHtml($url, $ref='') {
        $htmldom = new \Htmldom();
        $htmldom->load($this->getCurlHtml($url,$ref));
        return $htmldom;
    }

    public function getData($domainGet, $q='') {
        $q = urlencode($q);
        $dataConfig = $this->getConfig();
        if(isset($dataConfig[$domainGet])===false) return [];

        $thisData = $dataConfig[$domainGet];
        //to call back, function closure, limit is 2 level of array [ [ [] ] ], can config ['func' => function($arg) { $this->. .... }]
        foreach($thisData as $k=>$v) {
            if(!is_array($v)) {
                if(is_callable($v)) {
                    $getXCB = $v->bindTo($this, get_class($this));
                    $thisData[$k] = $getXCB;
                }
            }else {
                foreach($v as $i=>$s) {
                    if(!is_array($s)) {
                        if (is_callable($s)) {
                            $getXCB = $s->bindTo($this, get_class($this));
                            $thisData[$k][$i] = $getXCB;
                        }
                    }else {
                        foreach($s as $j=>$h)
                            if (is_callable($h)) {
                                $getXCB = $h->bindTo($this, get_class($this));
                                $thisData[$k][$i][$j] = $getXCB;
                            }
                    }
                }
            }
        }

        if(isset($thisData['result'])) return $thisData['result']($q);
        if(!$thisData['url']) return [];
        $url = str_replace('[q]', $q, $this->detectFunc($thisData['url'], $q) );
        $html = $this->getDomHtml($url, isset($thisData['ref'])?$thisData['ref']:'');
        if(isset($thisData['useTamp']['html'])) $this->dataTamp['html'] = $html;
        //box item setting
        if(is_callable($thisData['box'])) $itemTop = $thisData['box']($html);
        else if(!isset($thisData['box']['find'])) $itemTop = $html->find($thisData['box']);
        else {
            if (isset($thisData['box']['parent'])) {
                $itemTop = $html->find($thisData['box']['parent'], isset($thisData['box']['pindex'])?$thisData['box']['pindex']:0);
                if($itemTop) $itemTop = $itemTop->find($thisData['box']['find']);
            }else $itemTop = $html->find($thisData['box']['find']);
        }

        //cant get box item -> log file error
        if(!$itemTop) {
            return [];
        }

        //get data item
        $arr = [];
        $issetIgnore = isset($thisData['get']['ifignore']);
        foreach($itemTop as $k=>$items) {
            $a = [];
            if($issetIgnore&&$thisData['get']['ifignore']($items)) continue;//bo qua ko get items neu item...
            $thisDataGet = $thisData['get'];
            if($issetIgnore) unset($thisDataGet['ifignore']);

            foreach($thisDataGet as $name=>$v) {
                if(!$v)
                    $a[$name] = '';
                else if(is_array($v)){
                    if (isset($v['this'])) $a[$name] = $items;
                    else $a[$name] = $items->find($v['find'], isset($v['index'])?$v['index']:0);
                    if (isset($v['func']) && is_callable($v['func'])) {
                        if ($a[$name]) $a[$name] = $v['func']($a[$name]);
                        else $a[$name] = '';
                    }else if($a[$name]) $a[$name] = isset($v['attr']) ? $a[$name]->{"{$v['attr']}"} : $a[$name]->plaintext;
                    else $a[$name] = '';
                }else {
                    $a[$name] = $items->find($v,0);
                    if($a[$name]) $a[$name] = $a[$name]->plaintext;
                    else $a[$name] = '';
                }
                $a[$name] = trim($a[$name]);
            }
            if(isset($a['title']{0})) array_push($arr, $a);
        }
        $a = [];
        if(isset($thisData['block'])):
            $items = $html;
            foreach($thisData['block'] as $name=>$v) {
                if(!$v)
                    $a[$name] = '';
                else if(is_array($v)){
                    $a[$name] = $items->find($v['find'], isset($v['index'])?$v['index']:0);
                    if (isset($v['func']) && is_callable($v['func'])) {
                        if ($a[$name]) $a[$name] = $v['func']($a[$name]);
                        else $a[$name] = '';
                    }else if($a[$name]) $a[$name] = isset($v['attr']) ? $a[$name]->{"{$v['attr']}"} : $a[$name]->plaintext;
                    else $a[$name] = '';
                }else {
                    $a[$name] = $items->find($v,0);
                    if($a[$name]) $a[$name] = $a[$name]->plaintext;
                    else $a[$name] = '';
                }
                $a[$name] = trim($a[$name]);
            }
        endif;
        $result = ['items' => $arr, 'block' => $a];
        //dd($result);
        return $result;
    }
}
