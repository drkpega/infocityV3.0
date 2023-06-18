@extends('layouts.app')

@section('title', 'Favourites')

@section('content')
<div x-data="{open: false}">
<h3>Favourite</h3>


<div class="to-delete">
    <button @click="open=false" type="button" class="btn btn-secondary" x-show="open">Back</button>
    <button @click="open=true" type="button" class="btn btn-danger" x-show="!open">
                <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
            </button>
</div>

<div class="etalase-postingan">
    @foreach($user->kegiatan as $k)
    <div class="card">
        <img src="" alt="/poster1">
        <h5>{{$k->nama_kegiatan}}</h5>
        <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
    </div>
    @endforeach

    <div class="card">
        <img src="" alt="/poster2">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster3">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster4">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster5">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster6">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster7">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
    <div class="card">
        <img src="" alt="/poster8">
        <h5>NamaKegiatan</h5>
        <button type="button" class="btn btn-danger">X Hapus</button>
    </div>
</div>

</div>
@endsection
