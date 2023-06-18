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

        $data = Favorite::where('Favorites.user_id', $id)->join('kegiatans', 'kegiatans.id', '=', 'favorites.kegiatan_id')
            ->get();

        return view('user.favorite', ['fav' => $data]);
    }

    public function favorite($id){
    }
}
