<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
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

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error","Registeration failed, Try Again!");
        }
        return redirect(route('home'))->with("succes","Registeration succesfull");

        function logout(){
            Session::flush();
            Auth::logout();
            return redirect(route('login'));
        }

    }

}