@extends('layouts.app')

@section('title', 'Form Informasi Kegiatan')

@section('content')

    <h3>Form Informasi Kegiatan</h3>

    <div class="detail-kegiatan-edit">
        <center><img src="./image/poster.png" alt="/poster"></center>
        <br>
        <form action="{{route ('store')}}" method="POST" enctype="multipart/form-data">
            {{-- <form method="POST" enctype="multipart/form-data"> --}}
        @csrf
            <div class="row">
                <label for="inputNamaKegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputNamaKegiatan" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan">
                </div>
            </div>

            <div class="row">
                <label for="inputHariTanggal" class="col-sm-3 col-form-label">Hari & Tanggal Pelaksanaan</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputHariTanggal" placeholder="Hari, Tanggal" name="tanggal">
                </div>
            </div>

            <div class="row">
                <label for="inputLokasi" class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputLokasi" placeholder="Masukkan Lokasi" name="lokasi">
                </div>
            </div>
            <div class="row">
                <label for="inputBenefit" class="col-sm-3 col-form-label">Benefit</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputBenefit" placeholder="Masukkan Benefit" name="caption">
                </div>
            </div>
            <div class="row">
                <label for="inputAkunIG" class="col-sm-3 col-form-label">Akun IG</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputAkunIG" placeholder="Masukkan akun instagram" name="ig_pelaksana">
                </div>
            </div>
            <div class="row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="email" class="form-control" id="inputEmail" name="email_pelaksana">
                </div>
            </div>
            <div class="row">
                <label for="inputLinkPendaftaran" class="col-sm-3 col-form-label">Link Pendaftaran</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" id="inputLinkPendaftaran" name="link_pendaftaran">
                </div>
            </div>
            <div class="row">
                <label for="Caption" class="col-sm-3 col-form-label">Caption</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="text" class="form-control" placeholder="Masukkan Caption" id="Caption" style="height: 100px" name="benefit">
                </div>
            </div>
            <div class="row">
                <label for="poster" class="col-sm-3 col-form-label">Poster Kegiatan</label>
                <div class="col-sm-6">
                    <h4>:</h4>
                    <input type="file" class="form-control" placeholder="Masukkan Gambar" id="poster" style="height: 100px" name="poster_postingan">
                </div>
            </div>

                <center><button class="btn btn-success" type="submit">Upload</button></center>
        </form>
    </div>

@endsection
