<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $beasiswa = kegiatan::where('jenis_kegiatan', '1')->get();
        $event = kegiatan::where('jenis_kegiatan', '3')->get();
        $lomba = kegiatan::where('jenis_kegiatan', '2')->get();
        $volunteer = kegiatan::where('jenis_kegiatan', '4')->get();
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
        $search = $request->search;

        $kegiatan = DB::table('kegiatan')
            ->where('nama_kegiatan', 'like', "%" . $search . "%")->get();

        return view('cari', ['kegiatan' => $kegiatan]);

    }

    // profile
    public function profile($id)
    {
        $user = User::where('id', $id);
        $data = Favorite::where('Favorites.user_id', $id)->join('kegiatans', 'kegiatans.id', '=', 'favorites.kegiatan_id')->join('users', 'users.id', '=', "favorites.user_id")
            ->get();

        return view('user.profile_user', ['user' => $data]);
    }

    public function profile_update($id, Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->nama_user = $request->nama_user;
        $user->username = $request->username;
        $user->save();
        return redirect()->back();
    }
    public function password_reset($id, Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }

}