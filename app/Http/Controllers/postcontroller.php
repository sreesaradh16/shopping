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
    public function fn_facebook(){
        return view('facebook');
    }
    public function fn_admin(){
        return view('admin');
    }
    public function fn_cart(){
        return view('cart');
    }
    public function fn_changepass(){
        return view('changepass');
    }
}
