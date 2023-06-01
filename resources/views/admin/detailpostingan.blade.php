@extends('layouts.app')

@section('title-page', 'Postingan yang Dipilih')

@section('content')

    <h3>Lomba</h3>

    <div class="to-edit">
        <button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
    </div>
    <div class="detail-kegiatan">
        <center><img src="./image/poster.png" alt="/poster"></center>
        <br>
        <div class="icon">
            <i class="fa-regular fa-bookmark"></i>
            <i class="far fa-clone"></i>
        </div>
        <hr>
        <div class="tempat-tanggal">
            <div class="tanggal">
                <i class="far fa-calendar-alt"></i>
                <h6>{{ $kegiatan->tanggal }}</h6>
            </div>
            <div class="tempat">
                <i class="fa-solid fa-location-dot" style="color: #f41010;"></i>
                <a href="/linkzoom-atau-mapslokasi" style="font-size: 20px">{{$kegiatan->lokasi}}</a>
            </div>
        </div>
        <br>
        <div class="benefit">
            <h5>Benefit</h5>
            <p>{{$kegaitan->benefit}}</p>
        </div>
        <hr>
        <div class="pelaksana">
            <img src="{{asset('public/images/poster'.$kegiatan->poster_postingan)}}" alt="/pelaksanalogo">
            <div class="pelaksana-detail">
                <h5>{{$kegiatan->ig_pelaksana}}</h5>
                <!--nama pelaksana-->
                <h6>{{$kegiatan->email_pelaksana}}</h6>
                <!--email pelaksana-->
            </div>
        </div>
        <br>
        <h5>Detail Event</h5>
        <p>
            [KUESIONER #3]
            Halo teman-teman (), kami dari Fundraising ingin meminta bantuan kalian untuk mengisi kuesioner sebagai
            berikut:
            JADWAL PENGISIAN:
            SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIB
            1. Mengisi kuesioner pada link yang telah tersedia
            https://intip.in/SurveyPenggunaMedsos
            2. Upload bukti SS apabila telah mengisi form ke link:
            https://forms.gle/Rp4EbhRBjVwf2VtTA
            Diisi yaa jangan sampai kena denda. Terima kasih😊
        </p>
        <br>
    </div>

@endsection