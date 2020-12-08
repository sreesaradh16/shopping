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

Route::get('product', function () {
    return view('product');
});
Route::get('index',function(){
    return view('index');
});
Route::get('productdetails',function(){
    return view('productdetails');
});
Route::get('checkout',function(){
    return view('checkout');
});
Route::get('facebook',function(){
    return view('facebook');
});
Route::get('admin',function(){
    return view('admin');
});
Route::get('login',function(){
    return view('login');
});
Route::get('cart',function(){
    return view('cart');
});
Route::get('manageuser',function(){
    return view('manageuser');
});
Route::get('ordermanagement',function(){
    return view('ordermanagement');
});
Route::get('insertproduct',function(){
    return view('insertproduct');
});
Route::get('manageproduct',function(){
    return view('manageproduct');
});
Route::get('changepass',function(){
    return view('changepass');
});
