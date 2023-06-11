<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

// Controller untuk postingan admin
class HomeController extends Controller
{
    //
    /**
     * index
     *
     * @return View
     */

    public function index()
    {
        //get posts
        // $kegiatan = kegiatan::where('jenis_kegiatan', 'Lomba')->get();
        $kegiatan = kegiatan::all();
        // mengirim data pegawai ke view pegawai
        return view('welcome', ['kegiatan' => $kegiatan]);
    }
}