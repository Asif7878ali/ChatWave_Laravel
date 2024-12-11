<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        // Validate the login input
        $credentials = $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);
       
        // Attempt to log in the user
       if(!Auth::attempt($credentials)){
           session()->flash('error', 'Sorry Credentials doen not Match'); 
           return to_route('page.login');
       }
       $user = Auth::user();
    //    dd($user);
        session()->flash('success', 'Login Succesfully');      
        return view('pages.chat.chat', compact('user'));
   }
}
