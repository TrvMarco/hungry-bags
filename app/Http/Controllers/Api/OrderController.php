<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public $validation = [
        'client_name' => 'required|string|max:255',
        'client_surname' => 'required|string|max;255',
        'address' => 'required|string|',
        'phone' => 'required|numeric,'
    ];

    public function store(Request $request)
    {
        $data = $request->validate($this->validation);
        $newOrder = new Order();
        $newOrder->client_name = $data['client_name'];
        $newOrder->client_surname = $data['client_surname'];
        $newOrder->address = $data['address'];
        $newOrder->phone = $data['phone'];
        $newOrder->save();

        return $newOrder;

    }
}
