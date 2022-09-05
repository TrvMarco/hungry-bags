<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Order;
class OrderController extends Controller
{
    public function store(Request $request)
    {


        // $request->validate([
        //     'client_name' => 'required|string|max:255',
        //     'client_surname' => 'required|string|max;255',
        //     'address' => 'required|string|',
        //     'phone' => 'required|numeric,'
        // ]);

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
}
