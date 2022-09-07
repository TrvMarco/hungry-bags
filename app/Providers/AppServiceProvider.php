<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\Facades\App;
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
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'tt8v75fw3j6hv7jh',
                'publicKey' => 'tmb3hyymxj6ntbbf',
                'privateKey' => '94705802ce629f4b42eff8e705b842d8'
            ]);
        });
    }
}
