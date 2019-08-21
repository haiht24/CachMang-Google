<?php

define('BRAND', (!empty($_GET['brand'])?$_GET['brand']:'master'));
define('TREE', 'MCCorp/CachMang-Google');
function downloadCode($tree='MCCorp/CachMang-Google', $saveTo='master.zip', $brand = 'master') {
	
	$username='haidang9x';
	$password='haidang123';
	$URL = "https://api.github.com/repos/$tree/zipball/$brand";
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


function unZip($file='master.zip', $to='extract') {
	// assuming file.zip is in the same directory as the executing script.

	// get the absolute path to $file
	$path = pathinfo(realpath($file), PATHINFO_DIRNAME) . '/extract';

	$zip = new ZipArchive;
	$res = $zip->open($file);
	if ($res === TRUE) {
	  // extract it to the path we determined above
	  $zip->extractTo($path);
	  $zip->close();
	  echo '1';// echo "WOOT! $file extracted to $path";
	} else {
	  echo '0';// echo "Doh! I couldn't open $file";
	}
}

   // Function to remove folders and files 
function rrmdir($dir) {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file)
                if ($file != "." && $file != "..") rrmdir("$dir/$file");
            rmdir($dir);
        }
        else if (file_exists($dir)) unlink($dir);
    }

    // Function to Copy folders and files       
function rcopy($src, $dst) {
        if (is_dir ( $src )) {
            if(!file_exists ( $dst )) mkdir ( $dst );
            $files = scandir ( $src );
            foreach ( $files as $file )
                if ($file != "." && $file != "..")
                    rcopy ( "$src/$file", "$dst/$file" );
        } else if (file_exists ( $src ))
            copy ( $src, $dst );
        if (file_exists ( $src ))
            rrmdir ( $src );
    }
// ******* Usage: rcopy($source , $destination );
//Another example without deleting destination file or folder
function recurse_copy($src,$dst) { 
        $dir = opendir($src); 
        @mkdir($dst); 
        while(false !== ( $file = readdir($dir)) ) { 
            if (( $file != '.' ) && ( $file != '..' )) { 
                if ( is_dir($src . '/' . $file) ) { 
                    recurse_copy($src . '/' . $file,$dst . '/' . $file); 
                } 
                else { 
                    copy($src . '/' . $file,$dst . '/' . $file); 
                } 
            } 
        } 
        closedir($dir); 
}

function envFileToArr($pathFile) {
	$rs = [];
	$getFile = file_get_contents($pathFile);
	foreach(explode("\n", $getFile) as $line) {
      if( empty(trim($line)) ) continue;
      list($name, $val) = explode("=", $line, 2);
      $rs[trim($name)] = trim($val);
    }
	return $rs;
	
}
function arrToStrEnv($arrVal) {
	$rs = '';
	foreach($arrVal as $name=>$val) {
		$rs .= $name . '=' . $val . "\n";
	}
	return $rs;
} 
// **action step.
$treeExplode = explode('/', TREE);
$nameNewDir = '';
$dirOfNewCode = __DIR__.'/extract/' . $treeExplode[count($treeExplode)-1] . '-' . BRAND;
$files = scandir ( __DIR__.'/extract/' );
            foreach ( $files as $file ) {
				if(is_dir(__DIR__.'/extract/' . $file) && $file != "." && $file != ".." && $file) $nameNewDir = $file;
			}			
if($nameNewDir) $dirOfNewCode = __DIR__.'/extract/' . $nameNewDir;

//step 1 download code:
downloadCode(TREE, 'master.zip', BRAND);
//step 2 unzip:
unZip('master.zip', 'extract');
if(!file_exists($dirOfNewCode)) die('fail!!! dir new code not exists');
//step 3 (ignore) delete file not need update:
unlink($dirOfNewCode . '/.env');
unlink($dirOfNewCode . '/public/index.php');
unlink($dirOfNewCode . '/public/.htaccess');
//file env config:
$envHost = $dirOfNewCode . '/env/' . $_SERVER['HTTP_HOST'] . '.env';
$envCommon = $dirOfNewCode . '/.env.common';
	if(!file_exists($envHost)) {
		$envDefault = $dirOfNewCode . '/.env.default';
		$envContent = file_get_contents($envDefault);
	} else {
		$arrEnvCommon = envFileToArr($envCommon);
		$arrEnvHost = envFileToArr($envHost);
		$arrEnvHost['SITE_NAME'] = $_SERVER['HTTP_HOST'];
		
		$arrEnvMerge = array_merge($arrEnvHost, $arrEnvCommon);
		$envContent = arrToStrEnv($arrEnvMerge);
		
	}
file_put_contents($dirOfNewCode . '/.env', $envContent);
//step 4 paste to:
rcopy($dirOfNewCode . '/public', $dirOfNewCode);
recurse_copy($dirOfNewCode, dirname(__DIR__));




