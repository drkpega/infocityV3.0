<?php

use Illuminate\Support\Facades\Route;

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

Route::get('detailpostingan', function () {
    return view('admin.detailpostingan');
});

Route::get('tambahkegiatan', function () {
    return view('admin.tambah_kegiatan');
});

Route::get('homepageadmin', function () {
    return view('admin.homepage_admin');
});

Route::resource('/posts', \App\Http\Controllers\HomeController::class);
