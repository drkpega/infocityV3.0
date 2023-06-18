<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\models\User;
use app\models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class favoriteController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user()->id;
        $users = User::where('id', $user)->get();

        return view('user/favorite', ['user' => $users]);
    }
}