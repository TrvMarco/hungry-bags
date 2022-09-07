<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app) {
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'dfm59g2hpgmkkfzg',
                'publicKey' => 'ckyskn8rcvg9y29h',
                'privateKey' => 'f880fb1c8d24986353c4862dd5c0124e',  
            ]
            );
        });
    }
}
