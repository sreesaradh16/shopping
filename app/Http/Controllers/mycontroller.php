<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class mycontroller extends Controller
{
    public function insert(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $contact=$req->input('contact');
        $username=$req->input('username');
        $password=$req->input('password');
        $confirmpassword=$req->input('confirmpassword');
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
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
    public function login(Request $req)
    {
        $username=$req->input('username'); 
        $password=$req->input('password');
        $data= DB::table('users')->where('username',$username)->first();
        $admin='admin';
        $password='12345';
        if(is_null($data))
        {
            // echo "incorrect username";
            return redirect('login')->with('error','incorrect username');
        }   
        elseif(($username==$data->username)&&($password==$data->password))
        {
            if(($username==$admin)&&($password==$password))
            {
                return redirect('admin');
            }
            else
            {
                $req->session()->put('user_id',$data->username);
                return view('index');
            }
        }
        else
        {
            // echo"incorrect password";
            return redirect('login')->with('error','incorrect password');

        }
    }
    public function logout()
    {
       
        session()->forget('user_id');
        session()->flush();
        return view('index');
        
    }
    public function insertproduct(Request $request)
    {
       
        $category=$request->input('category');
        $name=$request->input('name');
        $company=$request->input('company');
        $price=$request->input('price');
        $description=$request->input('description');
        $shippingcharge=$request->input('shippingcharge');
        $availability=$request->input('availability');
        $file1=$request->file('upimage1')->getClientOriginalName();
        $file2=$request->file('upimage2')->getClientOriginalName();
        $file3=$request->file('upimage3')->getClientOriginalName();
        
        $image1= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image1);
        $image2= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image2);
        $image3= "upimage2".time().'.'.request()->upimage2->getClientOriginalExtension();
        $request->file('upimage2')->storeAs('public/profile',$image3);
        
        DB::table('product')->insert([
            'category' => $category,
            'name' => $name,
            'company' => $company,
            'price' => $price,
            'description' => $description,
            'shippingcharge' => $shippingcharge,
            'availability' => $availability,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ]);
        return redirect('insertproduct')->with('success','Succesfully added');
    }
    public function offer(Request $request)
    {
       
        $file1=$request->file('upimage1')->getClientOriginalName();
        $file2=$request->file('upimage2')->getClientOriginalName();
        $file3=$request->file('upimage3')->getClientOriginalName();
        
        $image1= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image1);
        $image2= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image2);
        $image3= "upimage2".time().'.'.request()->upimage2->getClientOriginalExtension();
        $request->file('upimage2')->storeAs('public/profile',$image3);
        
        DB::table('product')->insert([
            'category' => $category,
            'name' => $name,
            'company' => $company,
            'price' => $price,
            'description' => $description,
            'shippingcharge' => $shippingcharge,
            'availability' => $availability,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ]);
        return redirect('offer')->with('success','Succesfully added');
    }
    public function displayproduct()
    {
        $id=DB::table('product')->get();
        return view('manageproduct',['data'=>$id]);
    }
    public function deleteproduct($id)
    {
        DB::table('product')->where('id',$id)->delete();
        return redirect('manageproduct');
    }
    public function show($id)
    {
        $Datas = DB::table('product')->where('id',$id)->first();
        return view('updatetable',['data'=>$Datas]);
    }
    public function updateproduct(Request $req,$id)
    {   
        $category=$request->input('category');
        $name=$request->input('name');
        $company=$request->input('company');
        $price=$request->input('price');
        $shippingcharge=$request->input('shippingcharge');
        $availability=$request->input('availability');
        $file1=$request->file('upimage1')->getClientOriginalName();
        $file2=$request->file('upimage2')->getClientOriginalName();
        $file3=$request->file('upimage3')->getClientOriginalName();
        
        $image1= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image1);
        $image2= "upimage1".time().'.'.request()->upimage1->getClientOriginalExtension();
        $request->file('upimage1')->storeAs('public/profile',$image2);
        $image3= "upimage2".time().'.'.request()->upimage2->getClientOriginalExtension();
        $request->file('upimage2')->storeAs('public/profile',$image3);

        DB::table('product')->insert([
            'category' => $category,
            'name' => $name,
            'company' => $company,
            'price' => $price,
            'shippingcharge' => $shippingcharge,
            'availability' => $availability,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ]);
        return redirect('manageproduct')->with('success','Succesfully updated');
    }
    public function productmobile()
    {
        $id=DB::table('product')->where('category', '=', 'mobile')->get();
        return view('mobile',['data'=>$id]);
    }
    public function productlaptop()
    {
        $id=DB::table('product')->where('category', '=', 'laptop')->get();
        return view('laptop',['data'=>$id]);
    }
    public function producttv()
    {
        $id=DB::table('product')->where('category', '=', 'tv')->get();
        return view('tv',['data'=>$id]);
    }
    public function productaccesories()
    {
        $id=DB::table('product')->where('category', '=', 'accesories')->get();
        return view('accesories',['data'=>$id]);
    }
    public function order(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $address=$req->input('address');
        $city=$req->input('city');
        $state=$req->input('state');
        $zip=$req->input('zip');
        DB::table('orders')->insert([
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
        ]);
        return redirect('myorders');
    }
    public function displayorder()
    {
        $id=DB::table('orders')->get();
        return view('ordermanagement',['data'=>$id]);
    }
    public function displaymyorders()
    {
        $id=DB::table('orders')->get();
        return view('myorders',['data'=>$id]);
    }
    public function displayindexview()
    {
        $id1=DB::table('product')->skip(0)->take(3)->where('category', '=', 'banner')->get();
        $id2=DB::table('product')->skip(0)->take(5)->where('category', '=', 'mobile')->get();
        $id3=DB::table('product')->skip(0)->take(2)->where('category', '=', 'laptop')->get();
        $id4=DB::table('product')->skip(0)->take(3)->where('category', '=', 'accesories')->get();
        $id5=DB::table('product')->skip(0)->take(3)->where('category', '=', 'laptop')->get();
        $id6=DB::table('product')->skip(0)->take(3)->where('category', '=', 'tv')->get();
        $id7=DB::table('product')->skip(0)->take(5)->where('category', '=', 'mobile')->get();
        $id8=DB::table('product')->skip(0)->take(4)->where('category','=','mobile')->get();
        $id9=DB::table('product')->skip(4)->take(4)->where('category','=','mobile')->get();
        $id10=DB::table('product')->skip(0)->take(4)->where('category','=','laptop')->get();

        return view('index')->with('data1', $id1)->with('data2', $id2)->with('data3', $id3)
        ->with('data4', $id4)->with('data5', $id5)->with('data6', $id6)->with('data7', $id7)
        ->with('data8',$id8)->with('data9',$id9)->with('data10',$id10);
    }
    public function productdetails($id)
    {
        $data=DB::table('product')->where('id',$id)->get();
        return view('productdetails',['data'=>$data]);
    }
    public function cart($id)
    {
        $id=DB::table('product')->where('id',$id)->get();
        return view('cart',['data'=>$id]);
    }

    public function example()
    {
        $id=DB::table('product')->get();
        return view('example',['data'=>$id]);
    }

   

   





    
}
