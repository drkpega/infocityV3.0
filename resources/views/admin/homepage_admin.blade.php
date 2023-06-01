<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.npjs"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js' , 'resources/css/app.css'])

</head>
<body>
<div id="app">
<div x-data="open : false">
    <h3>Lomba</h3>

    <div class="edit-lomba-1">
        <button type="button" class="btn btn-success" :class="{'hidden' : !open}">Back</button>
        <button type="button" class="btn btn-success" :class="{'hidden' : open}">+ Tambah Informasi Kegiatan</button>
        <button @click="open:true" type="button" class="btn btn-danger" :class="{'hidden' : open}"><i class="fa-solid fa-trash-can"></i></button>

    </div>

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
</div>
</body>
</html>