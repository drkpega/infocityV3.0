<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.homepage_admin', ['kegiatan' => $kegiatan]);
    }

    public function tambah()
    {
        return view('admin.tambah_kegiatan');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'poster_postingan' => 'required',
            'jenis_kegiatan' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'caption' => 'required',
            'ig_pelaksana' => 'required',
            'email_pelaksana' => 'required',
            'link_pendaftaran' => 'required',
            'benefit' => 'required'
        ]);

        $poster = $request->file('poster_postingan');
        $tujuan_upload = 'images/kegiatan';
        $poster->move($tujuan_upload, $poster->getClientOriginalName());

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'poster_postingan' => $request->poster_postingan,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'caption' => $request->caption,
            'ig_pelaksana' => $request->ig_pelaksana,
            'email_pelaksana' => $request->email_pelaksana,
            'link_pendaftaran' => $request->link_pendaftaran,
            'benefit' => $request->benefit
        ]);

        return redirect('/admin/homepage');
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        // $poster = Kegiatan::where('id', $id)->first();
        // Kegiatan::delete('images/kegiatan/' . $poster->poster_postingan);

        return redirect('/admin/homepage');
    }
}