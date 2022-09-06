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
            return new Gateway(
            [
                'environment' => 'sandbox',
                'merchantId' => 'c6ss2fcmw695883y',
                'publicKey' => '2n9z698747cgp6fh',
                'privateKey' => 'e31ce978178dc25a336f3f1b79ab5462'  
            ]
            );
        });
    }
}
