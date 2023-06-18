<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
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
        // $kegiatan = kegiatan::all();
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
    public function kegiatan_volunteer()
    {
        //get posts volunteer (4)
        $kegiatan = kegiatan::where('jenis_kegiatan', '4')->get();
        return view('admin.kegiatan.volunteer', ['kegiatan' => $kegiatan]);
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
            'caption' => 'required | max:255',
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
            'poster_postingan' => $poster->getClientOriginalName(),
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'caption' => $request->caption,
            'ig_pelaksana' => $request->ig_pelaksana,
            'email_pelaksana' => $request->email_pelaksana,
            'link_pendaftaran' => $request->link_pendaftaran,
            'benefit' => $request->benefit
        ]);

        return redirect('/admin');
    }


    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.edit_kegiatan', ['kegiatan' => $kegiatan]);
    }
    public function update($id, Request $request)
    {
        // $request->validate([
        //     'nama_kegiatan' => 'required',
        //     // 'poster_postingan',
        //     'jenis_kegiatan' => 'required',
        //     'tanggal' => 'required',
        //     'lokasi' => 'required',
        //     'caption' => 'required | max:255',
        //     'ig_pelaksana' => 'required',
        //     'email_pelaksana' => 'required',
        //     'link_pendaftaran' => 'required',
        //     'benefit' => 'required'
        // ]);

        // $postingan = $request->file('poster_postingan');
        // $postingan_store = 'images/kegiatan';
        // $postingan->move($postingan_store, $postingan->getClientOriginalName());

        $kegiatan = Kegiatan::find($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        // $kegiatan->poster_postingan = $request->postingan->getClientOriginalName();
        $kegiatan->jenis_kegiatan = $request->jenis_kegiatan;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->caption = $request->caption;
        $kegiatan->ig_pelaksana = $request->ig_pelaksana;
        $kegiatan->email_pelaksana = $request->email_pelaksana;
        $kegiatan->link_pendaftaran = $request->link_pendaftaran;
        $kegiatan->benefit = $request->benefit;
        $kegiatan->save();

        return redirect('/admin');
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        // $poster = Kegiatan::where('id', $id)->first();
        // Kegiatan::delete('images/kegiatan/' . $poster->poster_postingan);

        return redirect('/admin');
    }

    public function detail($id)
    {
        $kegiatan = Kegiatan::find($id);

        return view('admin.detailpostingan', ['kegiatan' => $kegiatan]);
    }
}
