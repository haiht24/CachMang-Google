<?php
        $domain = $_SERVER['HTTP_HOST'];
        if ($domain == 'localhost'){
            $domain = 'getsetcoupon.com';//default template on localhost
        }
        $arrDomainParams = explode('.', $domain);
        if($arrDomainParams[0] === 'www')
            $folderName = $arrDomainParams[1];
        else
            $folderName = $arrDomainParams[0];
        define('ASSET_DOMAIN', $folderName);
$dmConfig = config('domains.'.$folderName); //edit in config
define('IS_SEARCH', !isset($dmConfig['isSearch'])||$dmConfig['isSearch']?1:0);
if(isset($dmConfig['template'])!==false) {
	$view_active = $folderName;
}else {
	$view_active = 'views';
}
	define('TEMPLATE', $view_active);

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path($view_active),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
