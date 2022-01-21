<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\usercontroller;
use App\http\Controllers\userproduct;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
     Session::forget('user');
    return redirect('/login');
});

// Route::view('/login','login');
Route::post('/login',[usercontroller::class,'login']);
Route::get('/',[userproduct::class,'index']);
Route::get('/det/{id}',[userproduct::class,'detail']);
Route::get('search',[userproduct::class,'search']);
Route::post('/cart',[userproduct::class,'addtocart']);
Route::get('/cartlist',[userproduct::class,'cartList']);
Route::get('remove/{id}',[userproduct::class,'removeList']);


// Route::get('/login', function () {
//     if(session()->has('user')){
//         return redirect('/');
//     }
//     return view('login');
// });


?>