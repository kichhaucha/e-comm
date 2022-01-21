<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

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

    public  function cartList(request $req){
        $userId=Session::get('user')['id'];
      $data=   DB::table('cart')->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist',['user'=>$data]);

    }

     function removeList($id){
        cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=   DB::table('cart')
          ->join('products','cart.product_id','products.id')
  
          ->where('cart.user_id',$userId)
          ->sum('products.price');
          return view('order',['user'=>$total]);
    }

   function Datat(Request $req)
   {
    $userId=Session::get('user')['id'];
    $allCart=cart::where('user_id',$userId)->get();
    foreach ($allCart as $cart) 
    {
        $order=new order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->address=$req->address;
        $order->status='pending';
        $order->payment_method=$req->payment;
        $order->payment_status='pending';
        $order->save();
    }
    cart::where('user_id',$userId)->delete();
    return redirect('/');
        
    //  return $req->input();
   
}
function myOrder()
{
    $userId=Session::get('user')['id'];
    $total= DB::table('orders')
      ->join('products','orders.product_id','products.id')

      ->where('orders.user_id',$userId)
      ->get();
      return view('myorder',['user'=>$total]);
}



}
