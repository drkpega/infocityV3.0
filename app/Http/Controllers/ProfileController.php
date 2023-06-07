<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($id)
    {

        // mengambil data pegawai yang id nya 1
        $user = User::find('id', $id);

        // mengirim data pegawai ke view pegawai 
        return view('profile_user', ['profile_user' => $user]);

    }
}