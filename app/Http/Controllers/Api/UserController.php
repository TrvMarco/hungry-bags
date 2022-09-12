<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use App\User;


use function PHPSTORM_META\type;

class UserController extends Controller
{   
    public function index()
    {
        $user = User::with(['types'])->get();
        return $user;
    }

    public function show($type)
    {
        $user = Type::where('name', $type)->with(['users'])->first();
        return $user;
    }
}
