@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <h4 style="width:100%; padding:0px 0px 0px 20px; font-weight:1000;">Hai, Jojo!</h4> {{-- nama ambil dari database --}}
    <h4 style="text-decoration:underline; width:100%; padding-left:20px;">Lengkapi profilmu dulu yuk!</h4>

    <div class="all-kegiatan">
        <div class="kegiatan">

            <a href="/user/lomba">
                <h4>Lomba</h4>
            </a>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/user/lomba"><img src="/images/activelomba.png" class="d-block w-100" alt="/lomba"></a>
                    </div>
                    @foreach ($lomba as $l)
                        <div class="carousel-item">
                            <a href="/postingan/detail/{{ $l->id }}"><img src="/images/kegiatan/{{ $l->poster_postingan }}" class="d-block w-100"
                                alt="/{{ $l->posterpostingan }}"></a>
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

            <a href="/user/beasiswa">
                <h4>Beasiswa</h4>
            </a>

            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/user/beasiswa"><img src="/images/activebeasiswa.png" class="d-block w-100" alt="/beasiswa"></a>
                    </div>
                    @foreach ($beasiswa as $b)
                        <div class="carousel-item">
                            <a href="/postingan/detail/{{ $b->id }}"><img src="/images/kegiatan/{{ $b->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $b->posterpostingan }}"></a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="kegiatan">

            <a href="/user/volunteer">
                <h4>Volunteer</h4>
            </a>

            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/user/volunteer"><img src="/images/activevolunteer.png" class="d-block w-100" alt="/volunteer"></a>
                    </div>
                    @foreach ($volunteer as $v)
                        <div class="carousel-item">
                            <a href="/postingan/detail/{{ $v->id }}"><img src="/images/kegiatan/{{ $v->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $v->posterpostingan }}"></a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="kegiatan">

            <a href="/user/event">
                <h4>Event</h4>
            </a>

            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/user/event"><img src="/images/activeevent.png" class="d-block w-100" alt="/event"></a>
                    </div>
                    @foreach ($event as $e)
                        <div class="carousel-item">
                            <a href="/postingan/detail/{{ $e->id }}"><img src="/images/kegiatan/{{ $e->posterpostingan }}" class="d-block w-100"
                                alt="/{{ $e->posterpostingan }}"></a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
@endsection
