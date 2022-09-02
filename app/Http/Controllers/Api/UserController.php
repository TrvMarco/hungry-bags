<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use App\User;


use function PHPSTORM_META\type;

class UserController extends Controller
{   
    public function index(Request $request)
    {
        $data = $request->all();
        $user = Type::where('id', $data)->with(['users'])->get();
        return $user;
    }

    public function index2()
    {
        $users = User::all();
        return $users;
    }

    public function show($type)
    {
        $user = Type::where('name', $type)->with(['users'])->first();
        return $user;
    }
}
