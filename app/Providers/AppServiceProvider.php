<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Http\Controllers\Api\Braintree\Gateway; 


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
        // require_once 'PATH_TO_BRAINTREE/lib/Braintree.php';

        // // braintree setup
        // $environment = env('BRAINTREE_ENV');
        // $braintree = new Braintree\Gateway([
        //     'environment' => $environment,
        //     'merchantId' => 'merchant_id_example',
        //     'publicKey' => 'public_key_example',
        //     'privateKey' => 'private_key_example'
        // ]);
        // config(['braintree' => $braintree]); 
    }
}
