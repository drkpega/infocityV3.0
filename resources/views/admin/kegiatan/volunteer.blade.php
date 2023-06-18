@extends('layouts.app')

@section('title', 'Volunteer')

@section('content')
    <div x-data="{ open: false }">
        <h3>Volunteer</h3>

        <div class="edit-lomba-1">
            <button type="button" class=" btn btn-secondary" x-show="open" @click="open=false">Back</button>
            <a href="/postingan/tambah"><button type="button" class="btn btn-success" x-show="!open">+ Tambah Informasi
                    Kegiatan</button></a>
            <button @click="open=true" type="button" class="btn btn-danger" x-show="!open">
                <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
            </button>



        </div>

        <div class="etalase-postingan">
            @foreach ($kegiatan as $k)
                <div class="card-1">

                    <a href="/postingan/detail/{{ $k->id }}"><img src="/images/kegiatan/{{ $k->poster_postingan }}"
                            alt="/poster1"></a>
                    <h5>{{ $k->nama_kegiatan }}</h5>
                    <a href="{{ url('/postingan/hapus/' . $k->id) }}" id="deleteLink{{ $k->id }}"
                        onclick="return confirmDelete(event, '{{ $k->id }}')">
                        <button x-show="open" type="button" class="btn btn-danger">X Hapus</button>
                    </a>

                    <script>
                        function confirmDelete(event, id) {
                            event.preventDefault();

                            Swal.fire({
                                title: 'Konfirmasi Hapus',
                                text: 'Apakah Anda yakin ingin menghapus?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Ya',
                                cancelButtonText: 'Tidak',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    const deleteLink = document.getElementById('deleteLink' + id);
                                    window.location.href = deleteLink.href;
                                }
                            });
                        }
                    </script>
                </div>
            @endforeach
        </div>

    </div>
@endsection
