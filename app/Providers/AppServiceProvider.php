<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

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
                'merchantId' => 'c6ss2fcmw695883y',
                'publicKey' => 'kz2fdx5xz5zwmjxy',
                'privateKey' => '9b0b0110468e1fc1cd66219df89477f2'
            ]);
        });
    }
}
