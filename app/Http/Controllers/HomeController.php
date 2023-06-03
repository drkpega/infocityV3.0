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
    public function index(): View
    {
        //get posts
        $kegiatans = Kegiatan::latest()->paginate(5);

        //render view with posts
        return view('admin.homepage_admin', compact('kegiatans'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.tambah_kegiatan');
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        //validate form
        $this->validate($request, [
            'nama_kegiatan' => 'required|min:5',
            'poster_postingan' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'caption' => 'required',
            'ig_pelaksana' => 'required',
            'email_pelaksana' => 'required|email',
            'link_pendaftaran' => 'required',
            'benefit' => 'required',
        ]);

        //upload image
        $image = $request->file('poster_postingan');
        $image->storeAs('public/images/poster', $image->hashName());

        //create post
        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'poster_postingan' => $image->hashName(),
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'caption' => $request->caption,
            'ig_pelaksana' => $request->ig_pelaksana,
            'email_pelaksana' => $request->email_pelaksana,
            'link_pendaftaran' => $request->link_pendaftaran,
            'benefit' => $request->benefit,
        ]);

        //redirect to index
        return redirect()->route('user.homepage_user')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        //get post by ID
        $kegiatan = Kegiatan::findOrFail($id);

        //render view with post
        return view('posts.show', compact('kegiatan'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $kegiatan = Kegiatan::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('kegiatan'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_kegiatan' => 'required|min:5',
            'poster_postingan' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'caption' => 'required',
            'ig_pelaksana' => 'required',
            'email_pelaksana' => 'required|email',
            'link_pendaftaran' => 'required',
            'benefit' => 'required',
        ]);

        //get post by ID
        $kegiatan = Kegiatan::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('poster_postingan')) {

            //upload new image
            $image = $request->file('poster_postingan');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/' . $kegiatan->image);

            //update post with new image
            $kegiatan->update([
                'nama_kegiatan' => $request->nama_kegiatan,
                'poster_postingan' => $image->hashName(),
                'tanggal' => $request->tanggal,
                'lokasi' => $request->lokasi,
                'caption' => $request->caption,
                'ig_pelaksana' => $request->ig_pelaksana,
                'email_pelaksana' => $request->email_pelaksana,
                'link_pendaftaran' => $request->link_pendaftaran,
                'benefit' => $request->benefit,
            ]);

        } else {

            //update post without image
            $kegiatan->update([
                'nama_kegaitan' => $request->nama_kegiatan,
                'lokasi' => $request->lokasi
            ]);
        }

        //redirect to index
        return redirect()->route('posts.homepage')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Kegiatan::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.homepage')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
