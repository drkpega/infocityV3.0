@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')

    <h3>Lomba</h3>
    <div class="detail-kegiatan">
        <center><img src="./image/poster.png" alt="/poster"></center>
        <br>
        <div class="icon">
            <i class="fal fa-bookmark"></i>
            <i class="far fa-clone"></i>
        </div>
        <hr>
        <div class="tempat-tanggal">
            <div class="tanggal">
                <i class="far fa-calendar-alt"></i>
                <h6>Senin, 23 Januari 2022</h6>
            </div>
            <div class="tempat">
                <i class="fas fa-map-marker-alt" style="color: #ff0000;"></i>
                <a href="/linkzoom-atau-mapslokasi" style="font-size: 20px">Zoom</a>
            </div>
        </div>
        <br>
        <div class="benefit">
            <h5>Benefit</h5>
            <p>Sertifikat, Hadiah, Thropy, Relasi</p>
        </div>
        <hr>
        <div class="pelaksana">
            <img src="./image/himtifunpam.jpg" alt="/pelaksanalogo">
            <div class="pelaksana-detail">
                <h5>himtif_unpam</h5>
                <!--nama pelaksana-->
                <h6>himtif.unpam042016@gmail.com</h6>
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
        <center><button type="button" class="btn btn-success">DAFTAR LOMBA</button></center>
    </div>


@endsection
