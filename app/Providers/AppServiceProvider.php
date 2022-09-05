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
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'tt8v75fw3j6hv7jh',
                    'publicKey' => 'cdx9bnv7kqd5f6yf',
                    'privateKey' => '042c7c5252380164dbe70dc723c12a42'
                ]
            );
        });
    }
}