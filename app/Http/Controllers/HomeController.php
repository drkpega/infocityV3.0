<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $event = kegiatan::where('jenis_kegiatan', '2')->get();
        $lomba = kegiatan::where('jenis_kegiatan', '3')->get();
        $volunteer = kegiatan::where('jenis_kegiatan', '4')->get();
    // mengirim data pegawai ke view pegawai
     return view('welcome', [
        'beasiswa' => $beasiswa,
        'event' => $event,
        'lomba' => $lomba,
        'volunteer' => $volunteer
     ]);

    }

}
