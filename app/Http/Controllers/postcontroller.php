<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use Illuminate\Support\Str;

class postcontroller extends Controller
{
    public function fn_index(){
        return view('index');
    }
    public function fn_product(){
        return view('product');
    }
    public function fn_productdetails(){
        return view('productdetails');
    }
    public function fn_checkout(){
        return view('checkout');
    }
    public function fn_facebook(){
        return view('facebook');
    }
    public function fn_admin(){
        return view('admin');
    }
    public function fn_login(){
        return view('login');
    }
    public function fn_logout(){
        return view('logout');
    }
    public function fn_cart(){
        return view('cart');
    }
    public function fn_manageuser(){
        return view('manageuser');
    }
    public function fn_ordermanagement(){
        return view('ordermanagement');
    }
    public function fn_insertproduct(){
        return view('insertproduct');
    }
    public function fn_manageproduct(){
        return view('manageproduct');
    }
    public function fn_changepass(){
        return view('changepass');
    }
}
