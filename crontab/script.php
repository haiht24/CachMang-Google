<?php

function downloadCode($tree='MCCorp/CachMang-Google', $saveTo='master.zip') {
	
	$username='haidang9x';
	$password='haidang123';
	$URL = "https://github.com/$tree/archive/master.zip";

	
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


// **action step.
//step 1 download code:
downloadCode('MCCorp/CachMang-Google', 'master.zip');
//step 2 unzip:
unZip('master.zip', 'extract');
//step 3 (ignore) delete file not need update:
unlink(__DIR__.'/extract/CachMang-Google-master/.env');
unlink(__DIR__.'/extract/CachMang-Google-master/public/index.php');
unlink(__DIR__.'/extract/CachMang-Google-master/public/.htaccess');
//step 4 paste to:
rcopy(__DIR__.'/extract/CachMang-Google-master/public', __DIR__.'/extract/CachMang-Google-master');
recurse_copy(__DIR__.'/extract/CachMang-Google-master', dirname(__DIR__));

