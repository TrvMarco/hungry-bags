<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;

use App\Order;
class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string',
            'client_surname' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|numeric',
            'total_price' => 'between:0,500.00'
        ]);

        $data = $request->all();

        $newOrder = new Order();
        $newOrder->client_name = $data['client_name'];
        $newOrder->client_surname = $data['client_surname'];
        $newOrder->address = $data['address'];
        $newOrder->phone = $data['phone'];
        $newOrder->total_price = $data['total_price'];
        $newOrder->status = true;
        $newOrder->save();

        return $newOrder;

    }

    public function generateToken(Request $request, Gateway $gateway){
        $clientToken = $gateway->clientToken()->generate();
        $data = [
            'token' => $clientToken
        ];
        return response()->json($data, 200);
    }   

    public function payOrder(Request $request, Gateway $gateway){
        $result = $gateway->transaction()->sale([
            'amount' => '10.00',
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement'
            ]
        ]);
        
        if($result->success){
            $data = [
                'success' => true,
                'messagge' => 'La transazione è andata a buon fine!'
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                'success' => false,
                'message' => 'Transazione fallita!'
            ];
            return response()->json($data, 401);
        }

        return 'payOrder';
    }
}
