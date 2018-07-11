<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestController extends Controller
{
    public function index(Request $request) {
        $q = $request->all()['q'];
        $kw = $q;
        $kw = urlencode($kw);
        $url = 'http://clients1.google.com/complete/search?hl=en&output=toolbar&q=' . $kw;

        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
        $options = [
            CURLOPT_CUSTOMREQUEST  =>"GET",        //set request type post or get
            CURLOPT_POST           =>false,        //set to GET
            CURLOPT_USERAGENT      => $user_agent, //set user agent
            CURLOPT_COOKIEFILE     =>"cookie.txt", //set cookie file
            CURLOPT_COOKIEJAR      =>"cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT        => 120,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        ];

        $ch = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        curl_close( $ch );

        try{
            $content = simplexml_load_string($content);
        }catch (\Exception $ex){
            return ['500'];
        }

        $content = json_encode($content);
        $content = json_decode($content);

        $found = [];
        if(!empty($content->CompleteSuggestion)){
            $rs = (array)$content->CompleteSuggestion;
            if(count($rs) > 1){
                foreach ($rs as $r) {
                    $sg = (array)$r->suggestion;
                    if( strpos($sg["@attributes"]->data, 'coupon') !== false || strpos($sg["@attributes"]->data, 'discount') !== false ){
                        array_push($found, $sg["@attributes"]->data);
                    }
                }
            }elseif (count($rs) === 1){
                $sg = (array)$rs['suggestion'];
                if( strpos($sg["@attributes"]->data, 'coupon') !== false || strpos($sg["@attributes"]->data, 'discount') !== false ){
                    array_push($found, $sg["@attributes"]->data);
                }
            }
        }
        return $found;
    }
}
