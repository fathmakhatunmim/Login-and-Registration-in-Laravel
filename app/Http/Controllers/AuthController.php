<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    function loginPost(Request $request){
           $request->validate([
    'email' => 'required|email',
    'password' => 'required|min:6',
]);

       
        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error","login failed");

    }
   public function register(){
         return view("auth.register");
    }

    function registerPost(Request $request){
       $request->validate([
    'fullname' => 'required|min:2|regex:/^[A-Za-z\s]+$/',
    'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%-]+@gmail\.com$/', 'unique:users,email'],
    'password' => 'required|min:6|confirmed',
]);

    $user = new User();
$user->name = $request->fullname;
$user->email = $request->email;
$user->password = Hash::make($request->password);


    if($user->save()){
      return redirect()->route("login")->with("success", "Account created successfully. Please login.");
    }

    return redirect()->route("register")->with("error", "Failed to create account.");

}
}
