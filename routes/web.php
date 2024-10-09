<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'indexes'])->name('indexes');
Route::get('/register', [AuthManager::class, 'register'])->name('register'); 
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('aboutus');
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('home');

Route::get('/content', function () {
    return view('Departcontent');
})->name('departcontent');

Route::get('/creator', function () {
    return view('content');
})->name('creatorcontent');
