<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login (Request $req){

        $req->validate([
            'email' => 'required|email|exists:users,email',
            'password'=>'required',
            'remember' => 'string'
        ]);

       // $user = $req->only('email','password');

        if(Auth::guard('web')->attempt(['email' => $req->email, 'password' => $req->password, 'deleted'=> 0], $req->remember )){
            return redirect('user/dashboard')->with('success','Login successful');
           }else{
           return redirect()->back()->with('error','Login failed');
        }
    }
}
