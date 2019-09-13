<?php

	$htaccess = file_get_contents(__DIR__.'/htaccess/lock.htaccess');
	$user = basename(dirname(dirname(getcwd())));
	$htaccess = str_replace('[user]', $user, $htaccess);
	file_put_contents(dirname(getcwd()) . '/.htaccess', $htaccess);
	
?>