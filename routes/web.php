<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\usercontroller;
use App\http\Controllers\product;

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
// Route::view('/login','login');
Route::post('/login',[usercontroller::class,'login']);
Route::get('/',[product::class,'index']);

// Route::get('/login', function () {
//     if(session()->has('user')){
//         return redirect('/');
//     }
//     return view('login');
// });
