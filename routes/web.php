<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\LoginRegisterController;
use App\Http\Controllers\admin\PostinganController;
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

// admin
Route::controller(PostinganController::class)->group(function () {
    Route::get('/admin/homepage', 'index');
    Route::get('/postingan/tambah', 'tambah');
    Route::post('/postingan/store', 'store');
    Route::get('/postingan/detail/{id}', 'detail');
    Route::get('/postingan/cari','search');
    // Route::get('/postingan/edit/{id}', 'edit');
    // Route::post('/postingan/update/{id}', 'update');

    Route::get('/postingan/hapus/{id}', 'delete');
    Route::get('/postingan/{id}', 'delete');

    Route::get('/admin/lomba', 'kegiatan_lomba');
    Route::get('/admin/event', 'kegiatan_event');
    Route::get('/admin/beasiswa', 'kegiatan_beasiswa');
    Route::get('/admin/volunteer', 'kegiatan_volunteer');
    Route::get('user/homepage', 'index2');
});

// user profile
Route::controller(ProfileController::class)->group(function () {
    Route::get('/user/profile', 'index');
    Route::get('/user/password/update/{id}', 'update_password');
    Route::get('/user/profile/update/{id}', 'update_profile');
    Route::get('/user/profile/hapus/{id}', 'delete');

});

// auth
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::get('detailpostingan', function () {
    return view('user.detail_postingan');
});

Route::get('detailpostinganadmin', function () {
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

