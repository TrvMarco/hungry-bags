<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// chiamte get
Route::get('types', 'Api\TypeController@index');

Route::get('users/{type}', 'Api\UserController@show');

Route::get('items/{user}', 'Api\ItemController@show');

Route::get('payments', 'Api\PaymentController@generate');

// chiamate post
Route::post('users', 'Api\UserController@index');

Route::post('orders', 'Api\OrderController@store');

Route::post('payments', 'Api\PaymentController@makePayment');