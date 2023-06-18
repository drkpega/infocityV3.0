<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    /**
     * index
     *
     * @return View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //$beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $event = kegiatan::where('jenis_kegiatan', '3')->get();
        $lomba = kegiatan::where('jenis_kegiatan', '2')->get();
        $volunteer = kegiatan::where('jenis_kegiatan', '4')->get();
    // mengirim data pegawai ke view pegawai
     return view('admin.homepage_admin', [
        'beasiswa' => $beasiswa,
        'event' => $event,
        'lomba' => $lomba,
        'volunteer' => $volunteer
     ]);

    }

    // Lomba
    public function kegiatan_lomba()
    {
        //get posts
        $kegiatan = kegiatan::where('jenis_kegiatan', '2')->get();
        return view('admin.kegiatan.lomba', ['kegiatan' => $kegiatan]);
    }

    // event
    public function kegiatan_event()
    {
        //get posts
        $kegiatan = kegiatan::where('jenis_kegiatan', '3')->get();
        return view('admin.kegiatan.event', ['kegiatan' => $kegiatan]);
    }

    // beasiswa
    public function kegiatan_beasiswa()
    {
        //get posts
        $kegiatan = kegiatan::where('jenis_kegiatan', '1')->get();
        return view('admin.kegiatan.beasiswa', ['kegiatan' => $kegiatan]);
    }

    // volunteer
    public function kegaitan_volunteer()
    {
        //get posts volunteer (4)
        $kegiatan = kegiatan::where('jenis_kegiatan', '4')->get();
        return view('admin.kegiatan.volunteer', ['kegiatan' => $kegiatan]);
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;


        // mengambil data dari table pegawai sesuai pencarian data
        $kegiatan = DB::table('kegiatans')
            ->where('nama_kegiatan', 'like',"%". $search . "%")->get();

        // mengirim data pegawai ke view index
        return view('cari', ['kegiatan' => $kegiatan]);

    }
}
