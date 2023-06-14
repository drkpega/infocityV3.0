@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')

    <h3>{{ $kegiatan->nama_kegiatan }}</h3>

    <div class="to-edit">
        <a href="/postingan/edit/{{$kegiatan->id}}" type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
    </div>

    <div class="detail-kegiatan">
        <center><img src="/images/kegiatan/{{$kegiatan -> poster_postingan}}" alt="/poster"></center>
        <br>
        <div class="icon">
            <i class="fas fa-heart"></i>
            <i class="far fa-clone"></i>
        </div>
        <hr>
        <div class="tempat-tanggal">
            <div class="tanggal">
                <i class="far fa-calendar-alt"></i>
                <h6> {{ $kegiatan->tanggal }}</h6>
            </div>
            <div class="tempat">
                <i class="fas fa-map-marker-alt" style="color: #f41010;"></i>
                {{-- <a href="/linkzoom-atau-mapslokasi" style="font-size: 20px">lokasi</a> --}}
                <a href="/linkzoom-atau-mapslokasi" style="font-size: 20px">{{ $kegiatan->lokasi }}</a>
            </div>
        </div>
        <br>
        <div class="benefit">
            <h5>Benefit</h5>
            <p>{{$kegiatan->benefit}}</p>
        </div>
        <hr>
        <div class="pelaksana">
            <img src="/images/kegiatan/{{$kegiatan -> poster_postingan}}" alt="/poster">
            <div class="pelaksana-detail">
                <h5>{{$kegiatan->ig_pelaksana}}</h5>
                <!--nama pelaksana-->
                <h6>{{$kegiatan->email_pelaksana}}</h6>
                <!--email pelaksana-->
            </div>
        </div>
        <br>
        <h5>Detail Event</h5>
        <p>{{$kegiatan->caption}}</p>
        <br>
    </div>

@endsection
