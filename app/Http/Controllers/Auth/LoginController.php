<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }
    
    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect(route('indexes'));
        }
        return redirect(route('indexes'))->with("error","Login details are not valid");
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // function loginPost(Request $request){
    //     $request->validate([
    
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $credentials = $request->only('email', 'password');
        
    //     if (auth()->attempt($credentials)) {
    //         return redirect(route('indexes'))->with('success', 'Logged in successfully!');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Login details are not valid.',
    //     ]);
    // }

    
    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }
}
