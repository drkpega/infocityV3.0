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
    @foreach($fav as $f)
    <div class="card-1">
        <img src="/images/kegiatan/{{$f->poster_postingan}}" alt="/poster1">
        <h5>{{$f->nama_kegiatan}}</h5>
        <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
    </div>
    @endforeach
</div>
@endsection
