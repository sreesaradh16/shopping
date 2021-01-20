<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class mycontroller extends Controller
{
    public function insert(Request $req)
    {
        $firstname=$req->input('firstname');
        $lastname=$req->input('lastname');
        $contact=$req->input('contact');
        $username=$req->input('username');
        $password=$req->input('password');
        $confirmpassword=$req->input('confirmpassword');
        DB::table('users')->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'contact' => $contact,
            'username' => $username,
            'password' => $password,
            'confirmpassword' => $confirmpassword,
        ]);
        return redirect('login');
    }
    public function display()
    {
        $id=DB::table('users')->get();
        return view('manageuser',['data'=>$id]);
    }
    public function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('manageuser');
    }
    public function show($id)
    {
        $Datas = DB::table('users')->where('id',$id)->first();
        return view('updateuser',['data'=>$Datas]);
    }
    public function update(Request $req,$id)
    {   
        $firstname=$req->input('firstname');
        $lastname=$req->input('lastname');
        $contact=$req->input('contact');
        $username=$req->input('username');
        $password=$req->input('password');
        $confirmpassword=$req->input('confirmpassword');
        DB::table('users')->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'contact' => $contact,
            'username' => $username,
            'password' => $password,
            'confirmpassword' => $confirmpassword,
        ]);
        return redirect('manageuser');
    }
    public function login(Request $req)
    {
        $username=$req->input('username'); 
        $password=$req->input('password');
        $data= DB::table('users')->where('username',$username)->first();
        if(is_null($data))
        {
            echo "incorrect username";
        }   
        elseif(($username==$data->username)&&($password==$data->password))
        {
            return view('index');
        }
        else
        {
            echo"incorrect password";
        }
    }
    
}
