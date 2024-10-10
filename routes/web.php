<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BEMController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('aboutus');
})->name('about');

Route::get('/admin', function () {
    return view('admin');
})->name('home');

Route::get('/content', function () {
    return view('Departcontent');
})->name('departcontent');

Route::get('/creator', function () {
    return view('content');
})->name('creatorcontent');

Route::get('/vote', function () {
    return view('vote');
})->name('vote');

Route::get('/diptek', function () {
    return view('diptek');
})->name('diptek');

Route::get('/depagsos', function () {
    return view('depagsos');
})->name('depagsos');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/index', [HomeController::class, 'indexes'])->name('indexes');

Route::get('/register', [AuthManager::class, 'register'])->name('register'); 

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 

Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('/strukturbem', [BEMController::class, 'index'])->name('strukturbem');

route::get('/tambahdata', [BEMController::class, 'tambahdata'])->name('tambahdata');

route::post('/insertdata', [BEMController::class, 'insertdata'])->name('insertdata');

route::get('/tampilkandata/{id}', [BEMController::class, 'tampilkandata'])->name('tampilkandata');

route::post('/updatedata/{id}', [BEMController::class, 'updatedata'])->name('updatedata');

route::get('/delete/{id}', [BEMController::class, 'delete'])->name('delete');