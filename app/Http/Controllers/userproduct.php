<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;

class userproduct extends Controller
{
    function index(){
        $data= Product::all();
        return view('product',['product'=>$data]);
    }
    function detail($id)
    {
        $data1= Product::find($id);
        // return $data1;
        return view('productdetauls',['user'=>$data1]);
    }

    function search(Request $req)
    {
    //   return $req->input();
        $data2=   Product::
            where('name', 'LIKE', "%".$req->input('query').  "%")->get();
            return view('search',['user'=>$data2]);
    }

    function addtocart(Request $req)
    {
        if( $req->session()->has('user')){
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartitem ()
    {
       $userId=Session::get('user')['id'];
       return cart::where('user_id',$userId)->count();
    }
}
