<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\DB;

class userController extends Controller
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
        //get posts
        // $kegiatan = kegiatan::where('jenis_kegiatan', 'Lomba')->get();
        // $kegiatan = kegiatan::all();
        $beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $event = kegiatan::where('jenis_kegiatan', '2')->get();
        $lomba = kegiatan::where('jenis_kegiatan', '3')->get();

        $volunteer = kegiatan::where('jenis_kegiatan', '4')->get();
    // mengirim data pegawai ke view pegawai
    return view('user.homepage_user', [
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
        $kegiatan = kegiatan::where('jenis_kegiatan', '3')->get();
        return view('admin.kegiatan.lomba', ['kegiatan' => $kegiatan]);
    }

    // event
    public function kegiatan_event()
    {
        //get posts
        $kegiatan = kegiatan::where('jenis_kegiatan', '2')->get();
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

    public function detail($id)
    {
        $kegiatan = Kegiatan::find($id);

        return view('user.detail_postingan', ['kegiatan' => $kegiatan]);
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;


        // mengambil data dari table pegawai sesuai pencarian data
        $kegiatan = DB::table('kegiatan')
            ->where('nama_kegiatan', 'like',"%". $search . "%")->get();

        // mengirim data pegawai ke view index
        return view('cari', ['kegiatan' => $kegiatan]);

    }

    // profile
    public function profile($id)
    {
        $user = User::where('id', $id);

        return view('user.profile_user', ['user' => $user]);
    }

    public function profile_update($id, Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|min:6|confirmed',
            'username' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'profile' => 'required'
        ]);

        $profile_pict = $request->file('profile');
        $image_upload = 'images/profile';
        $profile_pict->move($image_upload, $profile_pict->getClientOriginalName());

        $user = User::find($id);
        $user->nama_user = $request->nama_user;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->profile_image = $request->profile_pict;
        $user->save();
        return redirect()->back();
    }

}