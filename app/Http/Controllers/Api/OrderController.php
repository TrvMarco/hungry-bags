<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use App\Order;
use App\Item;
use App\User;

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

        $quantity = 2 ;

        if(isset($data['items'])){
            foreach($data['items'] as $singleItem){
                $newOrder->items()->attach($singleItem['id']);
            }
        }
        
        // Mail::to($newOrder->items->user()->email)->send(new SendMail($newOrder));
        

        return $newOrder;
    }

    public function index(){
        $order = Order::latest()->with(['items'])->first();
        return $order;
    }
}
