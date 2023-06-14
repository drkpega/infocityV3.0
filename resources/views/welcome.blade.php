@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <!-- <h4 style="width:100%; padding:20px; font-weight:1000;">Hai, Jojo!</h4> {{-- nama ambil dari database --}}
    <h4 style="text-decoration:underline">Lengkapi profilmu dulu yuk!</h4> -->

    <div class="kegiatan">
        <h4>Lomba</h4>
        
        <div class="etalase-kegiatan">
        @foreach($kegiatan -> where('jenis_kegiatan', '3') as $lomba)
            <a href="/postingan/detail/{{ $lomba->id }}">
                <img src="/images/kegiatan/{{$lomba -> poster_postingan}}" alt="/poster1">
            </a>
            <div>{{$lomba -> nama_kegiatan}}</div>
        @endforeach
        </div>
    </div>
    <div class="kegiatan">
        <h4>Beasiswa</h4>
        <div class="etalase-kegiatan">
        @foreach($kegiatan -> where('jenis_kegiatan', '1') as $beasiswa)
            <a href="/postingan/detail/{{ $beasiswa->id }}">
                <img src="/images/kegiatan/{{$beasiswa -> poster_postingan}}" alt="/poster1">
            </a>
            <div>{{$beasiswa -> nama_kegiatan}}</div>
        @endforeach
        </div>
    </div>
    <div class="kegiatan">
        <h4>Volunteer</h4>
        <div class="etalase-kegiatan">
        @foreach($kegiatan -> where('jenis_kegiatan', '4') as $volunteer)
            <a href="/postingan/detail/{{ $volunteer->id }}">
                <img src="/images/kegiatan/{{$volunteer -> poster_postingan}}" alt="/poster1">
            </a>
            <div>{{$volunteer -> nama_kegiatan}}</div>
        @endforeach
        </div>
    </div>
    <div class="kegiatan">
        <h4>Event</h4>
        <div class="etalase-kegiatan">
        @foreach($kegiatan -> where('jenis_kegiatan', '2') as $event)
            <a href="/postingan/detail/{{ $event->id }}">
                <img src="/images/kegiatan/{{$event -> poster_postingan}}" alt="/poster1">
            </a>
            <div>{{$event -> nama_kegiatan}}</div>
        @endforeach
        </div>
    </div>


@endsection
