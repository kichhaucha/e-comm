<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    function  login(Request $req)
    {
        $user= User::where(['email'=> $req->email])->first();
        // return $user;
        
        // // print_r($data);
            if (!$user || !Hash::check($req->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

            else{
                $req -> session()->put ('user', $user);
                return redirect("/");
            }
        
        //      $token = $user->createToken('my-app-token')->plainTextToken;
        
        //     $response = [
        //         'user' => $user,
        //         'token' => $token
        //     ];
        
        //      return response($response, 201);
    }
        
    }

