<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use app\models\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class favoriteController extends Controller
{
    //
    public function index($id)
    {

        $favorites = Favorite::where('user_id', $id)->get('kegiatan_id');


        return view('user/favorite', ['fav' => $favorites]);
    }
}