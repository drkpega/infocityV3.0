<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\auth\LoginRegisterController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\HomeController;

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
Auth::routes();

// guest
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'check-role:user'])->group(function () {

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/user/profile', 'index');
        Route::get('/user/password/update/{id}', 'update_password');
        Route::get('/user/profile/update/{id}', 'update_profile');
        Route::get('/user/profile/hapus/{id}', 'delete');

    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'check-role:admin'])->group(function () {

    Route::controller(adminController::class)->group(function () {
        Route::get('/admin', 'index');

        Route::get('/postingan/tambah', 'tambah');
        Route::post('/postingan/store', 'store');
        Route::get('/postingan/detail/{id}', 'detail');
        Route::get('/postingan/search', 'search');

        // Route::get('/postingan/edit/{id}', 'edit');
        // Route::post('/postingan/update/{id}', 'update');

        Route::get('/postingan/hapus/{id}', 'delete');
        Route::get('/postingan/{id}', 'delete');

        Route::get('/admin/lomba', 'kegiatan_lomba');
        Route::get('/admin/event', 'kegiatan_event');
        Route::get('/admin/beasiswa', 'kegiatan_beasiswa');
        Route::get('/admin/volunteer', 'kegiatan_volunteer');
    });
});


// auth
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});
Route::get('detailpostingan', function () {
    return view('admin.detailpostingan');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');