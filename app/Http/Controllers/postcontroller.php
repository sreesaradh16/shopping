<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use Illuminate\Support\Str;

class postcontroller extends Controller
{
    public function fn_file(){
        return view('file');
    }
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
    public function fn_register(){
        return view('register');
    }
    public function fn_facebook(){
        return view('facebook');
    }
    public function fn_formvalidation(){
        return view('formvalidation');
    }
    public function fn_admin(){
        return view('admin');
    }
}
