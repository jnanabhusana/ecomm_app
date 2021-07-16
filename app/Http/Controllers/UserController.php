<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->pass,$user->password))
        {
           return "username and password is invalid";
        }
     else
     {
         $req->session()->put('user',$user);
       return redirect('product');
     }
    }
}
