<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;
use App\User;
use App\Item;
use App\Order;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $items = $user->items;
        $types = $user->types;
        $user_id = Auth::id();

        $orders = Order::with(['items' => function($el) use($user_id) {
            $el->where('user_id', $user_id);
        }])->get();


        return view('admin.home', compact('types', 'user', 'items', 'orders'));
    }
}
