<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Get default setting from table settings */
       /* $settings = DB::table('settings')->get()->toArray();
        $arrSettings = [];
        foreach ($settings as $s) {
            $s->key === 'enable_default_keyword' ? $arrSettings['enable_default_keyword'] = $s->value:'';
        }
        view()->share('settings', $arrSettings);*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
