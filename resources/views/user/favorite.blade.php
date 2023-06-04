@extends('layouts.app')

@section('title', 'Favourites')

@section('content')

<h3>Favourite</h3>


<div class="to-delete">
    <button type="button" class="btn btn-secondary" :class="{ 'hidden': !open }">Back</button>
    <button @click="open:true" type="button" class="btn btn-danger" :class="{ 'hidden': open }">
        <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
    </button>
</div>

<div class="etalase-postingan">
    <div class="kartu">
        <img src="" alt="/poster1">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
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


@endsection
