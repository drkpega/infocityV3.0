<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

// class HomeController extends Controller
// {
//     //
//     /**
//      * index
//      *
//      * @return View
//      */

//     public function index()
//     {
//         //get posts
//         // $kegiatan = kegiatan::where('jenis_kegiatan', 'Lomba')->get();
//         $kegiatan = kegiatan::all();
//         // mengirim data pegawai ke view pegawai
//         return view('welcome', ['kegiatan' => $kegiatan]);
//     }
// }