<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $apiUrlGet,$apiUrlClear;

    public function __construct() {

        /* Get folder name contain config for each domain. Eg: http://localhost:8080/CachMang/public/images/beginfinder */
        define('TEMPLATE_PATH', "templates." . ASSET_DOMAIN . ".");
        /* http://localhost:8080/CachMang/public/css/domains/searchforany/app.css */
        define('CSS_PATH', 'css/domains/' . TEMPLATE);
        define('USE_DEFAULT_KEYWORD', config('domains.' . ASSET_DOMAIN)['useDefaultKeyword']);
        define('DEFAULT_KEYWORD', config('domains.' . ASSET_DOMAIN)['defaultKeyword']);
        if (class_exists('Location')) {
            $ip = \Request::ip();
            $position = \Location::get($ip);
            define('CITY', $position->cityName);
        } else
            define('CITY', '');
        $this->apiUrlGet = 'http://'.API_CONFIG_IP.'/getsearch?from=' . API_CONFIG_FROM . '&q=';
        $this->apiUrlClear = 'http://'.API_CONFIG_IP.'/clear-cache?q=';
    }

    public function getCurlHtml($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 0);
        //if($ref) curl_setopt($ch, CURLOPT_REFERER, $ref);
        curl_setopt($ch, CURLOPT_COOKIESESSION, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        curl_close($ch);
        return $html;
    }
	
    public function getFromApiNodejs($q) {
        $q = str_replace('-', '+', $q );
        $url = $this->apiUrlGet . $q . '&d=' . $_SERVER['HTTP_HOST'];
        $data = json_decode($this->getCurlHtml($url));
        $rs = [
            'items' => [],
            'block' => [
                'suggestion' => ''
            ]
        ];
        $url = [];
        if (!empty($data)) {
            foreach ($data as $k => $s) {
                if (!empty($s)) foreach ($s->results as $item) if (!in_array($item->url, $url)) {
                    $rs['items'][] = [
                        'title' => $item->title,
                        'description' => $item->description,
                        'url' => $item->url
                    ];
                    $url[] = $item->url;
                }
                if (!empty($s->suggest)) {
                    $rs['block']['suggestion'] .= ',' . join(',', $s->suggest);
                }
            }
        }
        return $rs;
    }

    public function getGoogleSuggestSearch($kw, $filterResult = true) {
        $kw = urlencode($kw);
        $url = 'http://clients1.google.com/complete/search?hl=en&output=toolbar&q=' . $kw;
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
        $options = [
            CURLOPT_CUSTOMREQUEST => "GET",        //set request type post or get
            CURLOPT_POST => false,        //set to GET
            CURLOPT_USERAGENT => $user_agent, //set user agent
//            CURLOPT_COOKIEFILE => "cookie.txt", //set cookie file
//            CURLOPT_COOKIEJAR => "cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING => "",       // handle all encodings
            CURLOPT_AUTOREFERER => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT => 120,      // timeout on response
            CURLOPT_MAXREDIRS => 10,       // stop after 10 redirects
        ];

        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close($ch);

        try {
            $content = simplexml_load_string($content);
        } catch (\Exception $ex) {
            return ['500'];
        }

        $content = json_encode($content);
        $content = json_decode($content);

        $found = [];
        if (!empty($content->CompleteSuggestion)) {
            $rs = (array)$content->CompleteSuggestion;
            if (count($rs) > 1) {
                foreach ($rs as $r) {
                    $sg = (array)$r->suggestion;
                    if ($filterResult) {
                        if (strpos($sg["@attributes"]->data, 'coupon') !== false || strpos($sg["@attributes"]->data, 'discount') !== false) {
                            array_push($found, $sg["@attributes"]->data);
                        }
                    } else {
                        array_push($found, $sg["@attributes"]->data);
                    }
                }
            } elseif (count($rs) === 1) {
                $sg = (array)$rs['suggestion'];
                if ($filterResult) {
                    if (strpos($sg["@attributes"]->data, 'coupon') !== false || strpos($sg["@attributes"]->data, 'discount') !== false) {
                        array_push($found, $sg["@attributes"]->data);
                    }
                } else {
                    array_push($found, $sg["@attributes"]->data);
                }
            }
        }
        return $found;
    }
}
