<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function index(){
        return view('menu/home');
    }
    function login(){
        return view('menu/login');
    }
    function register(){
        return view('menu/register');
    }
    function about(){
        return view('menu/aboutus');
    }
    function vote(){
        return view('menu/vote');
    }
}
