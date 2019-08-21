<?php

define('BRAND', (!empty($_GET['brand'])?$_GET['brand']:'master'));
define('TREE', 'MCCorp/CachMang-Google');
function downloadCode($file='', $tree='MCCorp/CachMang-Google', $saveTo='script.php', $brand = 'master') {
	
	$username='haidang9x';
	$password='haidang123';
	$URL = "https://raw.githubusercontent.com/$tree/$brand/$file";
	//$URL = "https://github.com/$tree/archive/$brand.zip";
	//die($URL);
$ch=curl_init();
//curl_setopt($ch,CURLOPT_COOKIESESSION,true);
//$fcook = __DIR__.'/cookie.txt';
//curl_setopt($ch,CURLOPT_COOKIEJAR,$fcook);
//curl_setopt($ch,CURLOPT_COOKIEFILE,$fcook);
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 3600); 
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0");
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$GET = curl_exec($ch);
curl_close($ch);
//die($GET);
	file_put_contents($saveTo, $GET);
	
}