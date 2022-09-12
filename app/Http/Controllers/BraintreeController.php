<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BraintreeController extends Controller
{
    public function token(Request $request){
        $orderPrice = Order::latest()->first();

        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);

        if($request->input('nonce') != null){
            $nonceFromTheClient = $request->input('nonce');

            $gateway->transaction()->sale([
                'amount' => $orderPrice->total_price,
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => True
                ]
            ]);
            return view ('dashboard');
        }else{
            $clientToken = $gateway->clientToken()->generate();
            return view ('guest.braintree',['token' => $clientToken]);
        }
    }
}
