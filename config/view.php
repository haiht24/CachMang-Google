<?php

$domain = $_SERVER['HTTP_HOST'];
$dmConfig = include(__DIR__ . '/theme/domains_config.php'); //edit in config
// Get array config of domain
$dmConfig = $dmConfig[$domain];
// Get Google adsense config of domain
define('GA_CLIENT', !empty($dmConfig['google-adsense']['data-ad-client']) ? $dmConfig['google-adsense']['data-ad-client'] : '');
define('GA_SLOT', !empty($dmConfig['google-adsense']['data-ad-slot']) ? $dmConfig['google-adsense']['data-ad-slot'] : '');
// Get config Enable Search box in header
define('ENABLE_SEARCH_BOX', !empty($dmConfig['enableSearchBox']) && $dmConfig['enableSearchBox'] === 1 ? 1 : 0);
if (isset($dmConfig['template']) !== false) {
    // Get template name
    $view_active = $dmConfig['template'];
} else {
    // Get default template in folder resources/views if not found custom domain config
    $view_active = 'views';
}
define('TEMPLATE', $view_active);
define('ASSET_DOMAIN', $view_active);

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
