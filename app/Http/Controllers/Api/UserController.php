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
        $user = Type::where('name', $data)->with(['users'])->get();
        return $user;
    }
}
