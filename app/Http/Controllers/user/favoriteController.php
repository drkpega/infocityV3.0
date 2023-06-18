<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use app\models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class favoriteController extends Controller
{
    //
    public function index($id)
    {
        $user = User::find($id);

        return view('user/favorite', ['users' => $user]);
    }
}