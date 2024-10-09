<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function index(){
    //     $usertype = '';
    //     $user = User::all();
    //     if(Auth::id())
    //     {
    //         $usertype = Auth()->users()->role;
    //         if($usertype == 'user'){
    //             return view('home');
    //         }
    //         else if($usertype == 'admin'){
    //             return view('admin.index');
    //         }

    //     }
    //     return view('admin.index', compact('user', 'usertype'));
    // }

}
