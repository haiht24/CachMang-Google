<?php
function getConfig($path) { //fix hosting function config not exists

		$path = __DIR__ . '/' . str_replace('.', '/', $path) . '.php';
		if(file_exists($path)) return include($path);
		else return [];
	
}
$domain = $_SERVER['HTTP_HOST'];
$domain_host = str_replace('www.','', $domain);
$domain_host = str_replace('localhost', 'offersvoucher.com', $domain_host);
define('DOMAIN_HOST', $domain_host);

$dmConfigs = include(__DIR__ . '/theme/domains_config.php'); //edit in config
// Get array config of domain
$dmConfig = $dmConfigs[$domain];
// Get Google Analytic Tracking Id
define('GA_ANALYTIC', !empty($dmConfig['google-analytic']) ? $dmConfig['google-analytic']:'');
// Get Google adsense config of domain
define('GA_CLIENT', !empty($dmConfig['google-adsense']['data-ad-client']) ? $dmConfig['google-adsense']['data-ad-client'] : '');
define('GA_SLOT', !empty($dmConfig['google-adsense']['data-ad-slot']) ? $dmConfig['google-adsense']['data-ad-slot'] : '');
// Get config Enable Search box in header
define('ENABLE_SEARCH_BOX', !empty($dmConfig['enableSearchBox']) && $dmConfig['enableSearchBox'] === 1 ? 1 : 0);
if (!empty($dmConfig['template'])) {
    // Get template name
    $view_active = $dmConfig['template'];
} else {
    // Get default template in folder resources/views if not found custom domain config
    $view_active = 'views';
}
// api config
$apiConfig = ['ip' => env('API_IP'), 'from' => env('API_FROM')];
if(!empty($dmConfig['apiConfig'])) {
	// if(!empty($dmConfig['apiConfig']['ip'])) $apiConfig['ip'] = $dmConfig['apiConfig']['ip'];
	if(!empty($dmConfig['apiConfig']['from'])) $apiConfig['from'] = $dmConfig['apiConfig']['from'];
}
if(!empty($configApiListIp = getConfig('config')['api_list_ip'])) {
	$dmConfig_keys = array_keys($dmConfigs);
	$indexConfig = array_search($domain, $dmConfig_keys);
	$c = count($configApiListIp);
	if(file_exists($ip_file = dirname(__DIR__) . '/storage/framework/testing/ip_api.dat')) {
		$index_api = file_get_contents($ip_file);
		$apiConfig['ip'] = $configApiListIp[$index_api];
	}else {
		$index_api = $indexConfig%$c;
		$ip_config = $configApiListIp[$index_api];
		$apiConfig['ip'] = $ip_config;
	}
	
}
//constant
define('API_CONFIG_IP', $apiConfig['ip']);
define('API_CONFIG_FROM', $apiConfig['from']);
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
        resource_path('common'),
        resource_path($view_active), // custom folder /views by domain configs
        resource_path('views'), // default folder /views
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
