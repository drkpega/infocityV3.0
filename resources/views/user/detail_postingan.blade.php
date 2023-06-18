@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')

    <h3>{{ $kegiatan->nama_kegiatan }}</h3>

    <div class="detail-kegiatan">
        <center><img src="/images/kegiatan/{{ $kegiatan->poster_postingan }}" alt="/poster"></center>
        <br>
        <div class="icon">
            <i class="fas fa-heart"></i>
            <input type="text" value="{{ $kegiatan->link_pendaftaran }}" id="copyText"
                style="position: absolute; left: -9999px;">
            <button id="copyBtn" style="border: none; background-color:white;"><i class="far fa-clone"></i></button>
            <script>
                const copyBtn = document.getElementById('copyBtn')
                const copyText = document.getElementById('copyText')

                copyBtn.onclick = () => {
                    copyText.select(); // Selects the text inside the input
                    document.execCommand('copy'); // Simply copies the selected text to clipboard
                    Swal.fire({ //displays a pop up with sweetalert
                        icon: 'success',
                        title: 'Link Pendaftaran Berhasil Disalin',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            </script>
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
            <p>{{ $kegiatan->benefit }}</p>
        </div>
        <hr>
        <div class="pelaksana">
            <div class="pelaksana-detail">
                <h5>{{ $kegiatan->ig_pelaksana }}</h5>
                <!--nama pelaksana-->
                <h6>{{ $kegiatan->email_pelaksana }}</h6>
                <!--email pelaksana-->
            </div>
        </div>
        <br>
        <h5>Detail Event</h5>
        <p>{{ $kegiatan->caption }}</p>
        <br>
    </div>

@endsection
