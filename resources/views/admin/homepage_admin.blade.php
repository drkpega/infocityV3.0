@extends('layouts.app')

@section('title', 'Postingan yang Dipilih')

@section('content')
<<<<<<< Updated upstream
    <div x-data="open: false">
        <h3>Lomba</h3>

        <div class="edit-lomba-1">
            <button type="button" class="btn btn-secondary" :class="{ 'hidden': !open }">Back</button>
            <button type="button" class="btn btn-success" :class="{ 'hidden': open }">+ Tambah Informasi Kegiatan</button>
            <button @click="open:true" type="button" class="btn btn-danger" :class="{ 'hidden': open }">
=======
    <div x-data="{ open: false }">
        <h3>Lomba</h3>

        <div class="edit-lomba-1">
            <button type="button" class=" btn btn-secondary" x-show="open" @click="open=false">Back</button>
            <a href="/postingan/tambah"><button type="button" class="btn btn-success" x-show="!open">+ Tambah Informasi
                    Kegiatan</button></a>
            <button @click="open=true" type="button" class="btn btn-danger" x-show="!open">
>>>>>>> Stashed changes
                <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
            </button>

        </div>

<<<<<<< Updated upstream
            <div class="etalase-postingan">
                <div class="kartu">
                    <img src="" alt="/poster1">
                    <h5>NamaKegiatan</h5>
                    <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster2">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster3">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster4">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster5">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster6">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster7">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
                <div class="kartu">
                    <img src="" alt="/poster8">
                    <h5>NamaKegiatan</h5>
                    <button type="button" class="btn btn-danger">X Hapus</button>
                </div>
            </div>
        </div>
@endsection
=======
        <div class="kegiatan">

            <h4>Lomba</h4>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/activelomba.png" class="d-block w-100" alt="/lomba">
                    </div>
                    @foreach ($lomba as $l)
                        <div class="carousel-item">
                            <img src="/images/kegiatan/{{ $l->poster_postingan }}" class="d-block w-100"
                                alt="/{{ $l->posterpostingan }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div class="kegiatan">

            <h4>Beasiswa</h4>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/activebeasiswa.png" class="d-block w-100" alt="/beasiswa">
                    </div>
                    @foreach ($beasiswa as $b)
                        <div class="carousel-item">
                            <img src="/images/kegiatan/{{ $b->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $b->posterpostingan }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="kegiatan">

            <h4>Volunteer</h4>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/activevolunteer.png" class="d-block w-100" alt="/volunteer">
                    </div>
                    @foreach ($volunteer as $v)
                        <div class="carousel-item">
                            <img src="/images/kegiatan/{{ $v->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $v->posterpostingan }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="kegiatan">

            <h4>Event</h4>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/activeevent.png" class="d-block w-100" alt="/event    ">
                    </div>
                    @foreach ($event as $e)
                        <div class="carousel-item">
                            <img src="/images/kegiatan/{{ $e->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $e->posterpostingan }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



    @endsection
>>>>>>> Stashed changes
