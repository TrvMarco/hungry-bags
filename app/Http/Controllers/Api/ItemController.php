<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Item;

class ItemController extends Controller
{
    public function show($user)
    {
        $item = User::where('name', $user)->with(['items' => function($el) {
            $el->where('is_visible', true);
        }])->first();
        return $item;
    }
}
