@extends('layouts.app')

@section('title', 'Beasiswa')

@section('content')
    <div x-data="{open: false}">
        <h3>Beasiswa</h3>

            <div class="etalase-postingan">
                @foreach($kegiatan as $k)
                <div class="card-1">
                    <a href="/postingan/detail/{{ $k->id }}"><img src="/images/kegiatan/{{$k -> poster_postingan}}" alt="/poster1"></a>
                    <h5>{{ $k->nama_kegiatan }}</h5>
                </div>
                @endforeach
            </div>

    </div>
@endsection
