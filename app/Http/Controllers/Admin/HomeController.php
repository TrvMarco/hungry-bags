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
        $user_id = Auth::id();
        $items = $user->items;
        $types = $user->types;
        $orders = Order::whereHas('items', function($el) use($user_id) {
            $el->where('user_id', $user_id);
        })->with(['items'])->get();
        return view('admin.home', compact('types', 'user', 'items', 'orders'));
    }
}
