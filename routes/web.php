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
Route::get('file',function(){
    return view('file');
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
Route::get('register',function(){
    return view('register');
});
Route::get('facebook',function(){
    return view('facebook');
});
Route::get('formvalidation',function(){
    return view('formvalidation');
});