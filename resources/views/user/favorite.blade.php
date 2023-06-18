@extends('layouts.app')

@section('title', 'Favourites')

@section('content')
<div x-data="{open: false}">
<h3>Favourite</h3>


<div class="to-delete">
    <button @click="open=false" type="button" class="btn btn-secondary" x-show="open">Back</button>
    <button @click="open=true" type="button" class="btn btn-danger" x-show="!open">
                <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
            </button>
</div>

<div class="etalase-postingan">
    @foreach($users->kegiatan as $k)
    <div class="card">
        <img src="/images/kegiatan/{{$k->poster_postingan}}" alt="/poster1">
        <h5>{{$k->nama_kegiatan}}</h5>
        <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
    </div>
    @endforeach
</div>
@endsection
