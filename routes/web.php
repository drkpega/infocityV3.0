<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\LoginRegisterController;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', \App\Http\Controllers\HomeController::class);

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::get('detailpostingan', function () {
    return view('admin.detailpostingan');
});

Route::get('tambahkegiatan', function () {
    return view('admin.tambah_kegiatan');
});

Route::get('homepageadmin', function () {
    return view('admin.homepage_admin');
});

Route::get('app', function () {
    return view('layouts.app');
});

Route::get('homepageuser', function () {
    return view('user.homepage_user');
});

Route::get('detailpostinganuser', function () {
    return view('user.detail_postingan');
});

Route::get('profileuser', function () {
    return view('user.profile_user');
});

Route::get('favorite', function () {
    return view('user.favorite');
});

Route::get('kategorikegiatan', function () {
    return view('user.kategori_kegiatan');
});

Route::resource('/posts', \App\Http\Controllers\HomeController::class);
