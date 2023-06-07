@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')

    <h3>Lomba</h3>

    <div class="to-edit">
        <a href="/postingan/edit/{{$kegiatan->id}}" type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
    </div>
    
    <div class="detail-kegiatan">
        <center><img src="/images/kegiatan/{{$kegiatan -> poster_postingan}}" alt="/poster"></center>
        <br>
        <div class="icon">
            <i class="fa-regular fa-bookmark"></i>
            <a href="/postigan/detail/{{$kegiatan->id}}"><i class="far fa-clone"></i></a>
        </div>
        <hr>
        <div class="tempat-tanggal">
            <div class="tanggal">
                <i class="far fa-calendar-alt"></i>
                <h6> {{ $kegiatan->tanggal }}</h6>
            </div>
            <div class="tempat">
                <i class="fa-solid fa-location-dot" style="color: #f41010;"></i>
                <a href="/linkzoom-atau-mapslokasi" style="font-size: 20px">{{$kegiatan->lokasi}}</a>
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
