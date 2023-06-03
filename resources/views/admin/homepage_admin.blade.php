@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')
    <div x-data="open: false">
        <h3>Lomba</h3>

        <div class="edit-lomba-1">
            <button type="button" class="btn btn-secondary" :class="{ 'hidden': !open }">Back</button>
            <button type="button" class="btn btn-success" :class="{ 'hidden': open }">+ Tambah Informasi Kegiatan</button>
            <button @click="open:true" type="button" class="btn btn-danger" :class="{ 'hidden': open }">
                <i class="fa-solid fa-trash-can"></i>
            </button>

        </div>

            <div class="etalase-postingan">
                <div class="kartu">
                    <img src="" alt="/poster1">
                    <h5>NamaKegiatan</h5>
                    <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster2">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster3">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster4">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster5">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster6">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster7">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster8">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
            </div>
        </div>
@endsection
