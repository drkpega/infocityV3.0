@extends('layouts.app')
  
@section('title', 'Postingan yang Dipilih')

@section('content')
    <div x-data="{open: false}">
        <h3>Lomba</h3>
  

            <div class="etalase-postingan">
              @foreach($kegiatan as $k)
                <div class="kartu">
                    <a href="/postingan/detail/{{ $k->id }}"><img src="/images/kegiatan/{{$k -> id}}" alt="/poster1"></a>
                   

                    <h5>{{ $k->nama_kegiatan }}</h5>
                    <a href="/postingan/hapus/{{ $k->id }}" onclick="return confirm('Are you sure?')"><button  x-show="open" type="button" class="btn btn-danger">X Hapus</button></a>
                </div>

                @endforeach
            </div>
               

    </div>
    @endsection
             