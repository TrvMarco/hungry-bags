<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function generate(Request $request, Gateway $gateway){
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token 
        ];
        return response()->json($data);
    }

    public function makePayment(Request $request, Gateway $gateway){
        $result = $gateway->transaction()->sale([
            'ammount' => $request,
            'paymentMethodNonce' => $request->token,
            'option' => [
                'submintForSettlement' => true
            ]
        ]);

        if($result->success){
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo!'
            ];
            return response()->json($data);
        }else{
            $data = [
                'success' => false,
                'message' => 'Transazione fallita!'
            ];
            return response()->json($data);
        }
    }
}
