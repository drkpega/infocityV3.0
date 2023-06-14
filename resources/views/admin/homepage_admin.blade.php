@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')
     <iv x-data="{open:false}">
        <h3>Lomba</h3>

        <divclass="edit-lomba-1">
            <button type="button" class=" btn btn-secondary" x-show="open" @click="open=false">Back</button>
            <a href="/postingan/tambah"><button  type="button" class="btn btn-success" x-show="!open">+ Tambah Informasi Kegiatan</button></a>
             <button @click="open=tr
    u
e" type="button" class="btn btn-danger" x-show="!open">
                <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
            </button>


        </divclass=>

            <div class="etalase-posting
an">
                @foreach($kegiatan as $k)
                <div class="kartu">
               
     <a href="/postingan/detail/{{ $k->id }}"><img style="width:259px; height:350px;" src="/images/kegiatan/{{$k -> poster_postingan}}" alt="poster"></a>
                    <h5>{{ $k->nama_kegiatan }}</h5>
                    <a href="/postingan/hapus/{{ $k->id }}" onclick="return confirm('Are you sure?')"><button  x-show="open" type="button" class="btn btn-danger">X Hapus</button></a>
                 </div>
    

                @endforeach
@endsection
