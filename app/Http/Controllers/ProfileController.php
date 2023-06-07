<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    // public function index($id)
    // {

    //     $tampilkan_data = Auth::user()->data();

    //     $jumlah_data = count($tampilkan_data['data']);
    //     return view('data.index', compact('tampilkan_data', 'jumlah_data'));


    //     // // mengambil data pegawai yang id nya 1
    //     // $user = User::find('id', $id);

    //     // // mengirim data pegawai ke view pegawai 
    //     // return view('profile_user', ['profile_user' => $user]);

    // }

    public function show()
    {
        $user = auth()->id();
        $profil = User::where('user_id', $user)->get();
    }
}