<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Api\Braintree\Gateway; 

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

    public function generateToken(Request $request){
        // 
    }   

    public function payOrder(Request $request){
        return 'payOrder';
    }
}
