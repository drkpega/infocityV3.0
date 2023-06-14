@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <div style="width:100%">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="/password/reset" method="POST">
                            {{ csrf_field() }}
                            <h4>
                                <center> <b>Ganti Password</b></center>
                            </h4>
                            <div class="card p-4" style="background-color:  #FCEAE4 ;">
                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-3 col-form-label">Password <span
                                            style="color: red;"> * </span> </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password"
                                            style="background-color:  #FCEAE4 ;" name="password">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="konfirPassword" class="col-sm-3 col-form-label">Konfirmasi Password <span
                                            style="color: red;"> * </span> </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="konfirPassword"
                                            style="background-color:  #FCEAE4 ;" name="konfirPassword">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn" style="float: right; background-color : #FFCFBF; ">Ganti Password</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <form action="/user/profile/update" method="POST">
                            <h4>
                                <center> <b>Update Profil Anda</b></center>
                            </h4>
                            <div class="card p-4" style="background-color:  #efe6f6 ;">
                                <div class="mb-3 row">
                                    <label for="nama_user" class="col-sm-3 col-form-label">Nama <span style="color: red;"> *
                                        </span> </class></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                                            style="background-color:  #EFE6F6 ;">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username" class="col-sm-3 col-form-label">Username <span
                                            style="color: red;"> * </span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" name="username"
                                            style="background-color:  #EFE6F6 ;">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Email <span style="color: red;"> *
                                        </span> </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                            style="background-color:  #EFE6F6 ;">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_telp" class="col-sm-3 col-form-label">Nomor telepon <span
                                            style="color: red;"> * </span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="no_telp" id="no_telp"
                                            style="background-color:  #EFE6F6 ;">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn" style="float: right; background-color : #CEB8DF;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="/public/images/profil.png" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px; background-image: url('background.png');">
                            <h5 class="my-3"><b>{{ Auth::user()->nama_user }} </b></h5>
                            <h5 class="my-3">{{ Auth::user()->no_telp }}</h5>
                            <br>
                            <br>
                            <br>
                            <div>
                                <div class="card">
                                    <div class="w-50 p-2">
                                        <div style="float: left" class="p-1">
                                            <i class="fa-regular fa-user"></i>
                                        </div>
                                            <p class="text-muted mb-1" style="text-align: left"><b>Nama</b></p>
                                            <p class="text-muted mb-1" style="text-align: left">{{ Auth::user()->nama_user }}</p>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div>
                                <div class="card">
                                    <div class="w-50 p-2">
                                        <div style="float: left" class="p-1">
                                        <i class="far fa-envelope-open"></i>
                                        </div>
                                        <p class="text-muted mb-1" style="text-align: left"><b>Email</b></p>
                                        <p class="text-muted mb-1" style="text-align: left">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg" style="padding-left: 0px">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container">
                                <h4>Disimpan</h4>
                                <div class="topnav-right">
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <a class="navbar-brand" href="#" style="color: green;"><b>All</b></a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#navbarNav" aria-controls="navbarNav"
                                                aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Monthly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Today</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col">Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lomba</td>
                                    <td>Lomba Design Poster Digital</td>
                                    <td>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Design
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Poster
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Himtif
                                        </div>
                                    </td>
                                    <td>Senin, 4 Mei 2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Lomba</td>
                                    <td>Lomba Design Poster Digital</td>
                                    <td>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Design
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Poster
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Himtif
                                        </div>
                                    </td>
                                    <td>Senin, 4 Mei 2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Beasiswa</td>
                                    <td>Beasiswa Pemuda</td>
                                    <td>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Design
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Poster
                                        </div>
                                        <div class="badge bg-dark-subtle text-wrap" style="width: 6rem; color: black;">
                                            Himtif
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Beasiswa</td>
                                    <td>Beasiswa Bank Indonesia</td>
                                    <td>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Beasiswa</td>
                                    <td>Beasiswa Alumni</td>
                                    <td>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

@endsection
