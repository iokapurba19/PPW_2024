<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BEMController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthManager::class, 'register'])->name('register'); 
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); 
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 

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

Route::get('/vote', function () {
    return view('menu/vote');
})->name('vote');

Route::get('/diptek', function () {
    return view('divisi-BEM/diptek');
})->name('diptek');

Route::get('/dhpm', function () {
    return view('divisi-BEM/dphm');
})->name('diptek');

Route::get('/depagsos', function () {
    return view('divisi-BEM/depagsos');
})->name('depagsos');

Route::get('/depkominfo', function () {
    return view('divisi-BEM/depkominfo');
})->name('depkominfo');

Route::get('/depsenbud', function () {
    return view('divisi-BEM/depsenbud');
})->name('depsenbud');

Route::get('/depkebdis', function () {
    return view('divisi-BEM/depkebdis');
})->name('depkebdis');

Route::get('/depol', function () {
    return view('divisi-BEM/depol');
})->name('depol');

Route::get('/dpdk', function () {
    return view('divisi-BEM/dpdk');
})->name('dpdk');

Route::get('/dhpm', function () {
    return view('dhpm');
})->name('dhpm');

Route::get('/sarpras', function () {
    return view('divisi-BEM/sarpras');
})->name('sarpras');

Route::get('/try', function () {
    return view('try');
})->name('try');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/basket', function () {
    return view('basket');
})->name('basket');

Route::get('/GDSC', function () {
    return view('GDSC');
})->name('GDSC');

Route::get('/Gitar', function () {
    return view('Gitar');
})->name('Gitar');

Route::get('/Psm', function () {
    return view('Psm');
})->name('Psm');

Route::get('/English', function () {
    return view('English');
})->name('English');

Route::get('/3DC', function () {
    return view('3DC');
})->name('3DC');


route::get('/strukturbem', [BEMController::class, 'index'])->name('strukturbem');

route::get('/tambahdata', [BEMController::class, 'tambahdata'])->name('tambahdata');

route::post('/insertdata', [BEMController::class, 'insertdata'])->name('insertdata');


