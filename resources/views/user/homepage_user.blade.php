@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <h4 style="width:100%; padding:20px; font-weight:1000;">Hai, Jojo!</h4> {{-- nama ambil dari database --}}
    <h4 style="text-decoration:underline">Lengkapi profilmu dulu yuk!</h4>

    <div class="kegiatan">
        <h4>Lomba</h4>
        <div class="etalase-kegiatan">
            <img src="" alt="/poster1">
            <img src="" alt="/poster2">
            <img src="" alt="/poster3">
            <img src="" alt="/poster4">
        </div>
    </div>
    <div class="kegiatan">
        <h4>Beasiswa</h4>
        <div class="etalase-kegiatan">
            <img src="" alt="/poster1">
            <img src="" alt="/poster2">
            <img src="" alt="/poster3">
            <img src="" alt="/poster4">
        </div>
    </div>
    <div class="kegiatan">
        <h4>Volunteer</h4>
        <div class="etalase-kegiatan">
            <img src="" alt="/poster1">
            <img src="" alt="/poster2">
            <img src="" alt="/poster3">
            <img src="" alt="/poster4">
        </div>
    </div>
    <div class="kegiatan">
        <h4>Event</h4>
        <div class="etalase-kegiatan">
            <img src="" alt="/poster1">
            <img src="" alt="/poster2">
            <img src="" alt="/poster3">
            <img src="" alt="/poster4">
        </div>
    </div>


@endsection
