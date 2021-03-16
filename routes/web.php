<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\CartController;

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
Route::get('',function(){
    return view('home');
});
Route::get('example',function(){
    return view('example');
});
Route::get('admin',function(){
    return view('admin');
});
Route::post('index',[mycontroller::class,'insert']);
Route::get('manageuser',[mycontroller::class,'display']);
Route::get('delete/{id}',[mycontroller::class,'delete']);
Route::view('login','login');
Route::post('login1/',[mycontroller::class,'login']);
Route::get('logout',[mycontroller::class,'logout']);
Route::view('insertproduct','insertproduct');
Route::post('insertproduct',[mycontroller::class,'insertproduct']);
Route::view('offer','offer');
Route::post('offer',[mycontroller::class,'offer']);
Route::get('manageproduct',[mycontroller::class,'displayproduct']);
Route::get('deleteproduct/{id}',[mycontroller::class,'deleteproduct']);
Route::get('updateproduct1/{id}',[mycontroller::class,'show']);
Route::post('updateproduct/{id}',[mycontroller::class,'updateproduct']);
Route::get('mobile',[mycontroller::class,'productmobile']);
Route::get('laptop',[mycontroller::class,'productlaptop']);
Route::get('tv',[mycontroller::class,'producttv']);
Route::get('accesories',[mycontroller::class,'productaccesories']);
Route::post('checkout',[mycontroller::class,'order']);
Route::get('ordermanagement',[mycontroller::class,'displayorder']);
Route::get('myorders',[mycontroller::class,'displaymyorders']);
Route::get('index',[mycontroller::class,'displayindexview']);
Route::get('productdetails/{id}',[mycontroller::class,'productdetails']);
Route::get('cart/{id}',[mycontroller::class,'cart']);



Route::get('example',[mycontroller::class,'example']);








