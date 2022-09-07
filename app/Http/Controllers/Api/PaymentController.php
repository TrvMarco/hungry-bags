<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    public function generate(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];

        return response()->json($data);
    }

    public function makePayment(Request $request, Gateway $gateway)
    {

        $result = $gateway->transaction()->sale([
            'amount' => $request,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submintForSettlement' => true
            ]
        ]);

        if($result->success) {
            $data = [
                'success' => true,
                'message' => 'transazione eseguita con successo'
            ];
            return response()->json($data,200);
        }else{
            $data = [
                'success' => false,
                'message' => 'transazione fallita'
            ];
            return response()->json($data,401);
        }
    }
}
