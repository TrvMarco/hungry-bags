<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// }); 

// COMMENTATA DA GIANLUCA

Auth::routes();
Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('items', 'ItemController');
        Route::resource('orders', 'OrderController');
        Route::resource('types', 'TypeController');
        Route::resource('users', 'UserController');
    });

    // frontoffice
Route::any('{any?}',function(){
    return view('guest.home');
})->where('any','.*');

// Braintree
// Route::any('/payment', 'BraintreeController@token')->name('token')->middleware('auth');

// Route::any('/payment', function(){
//     return view('guest.braintree');  
// });

Route::any('/payment', [BraintreeController::class, 'token'])->name('token')->middleware('guest');


