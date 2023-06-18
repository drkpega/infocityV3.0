<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/infocitynavbarlogo.png" alt="/logoinfocity">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto " style="width:70%">
                <form class="d-flex" role="search" action="/postingan/search" method="GET" style="width:100%">
                    <input class="form-control me-2 mr-2" name="search" type="text" placeholder="Mau cari info apa?"
                        value="{{ old('search') }}">
                    <input class="btn btn-primary" type="submit" value="SEARCH">
                    {{-- <button class="btn btn-primary" type="submit" value="SEARCH"><i class="fas fa-search"></i></button> --}}
                </form>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="/login">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" id="logoutLink"><i
                                class="fa-solid fa-right-from-bracket mx-1"></i></a>
                        <script>
                            const logoutLink = document.getElementById('logoutLink');

                            logoutLink.onclick = (event) => {
                                event.preventDefault(); // Menghentikan perilaku default dari anchor

                                Swal.fire({
                                    title: 'Konfirmasi Log Out',
                                    text: 'Apakah Anda yakin ingin keluar?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya',
                                    cancelButtonText: 'Tidak',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirect ke halaman log out
                                        window.location.href = logoutLink.href;
                                    } else {
                                        // Batal log out
                                        console.log('Batal');
                                    }
                                });
                            };
                        </script>
                        @if (Auth::user()->kode_user == 0)
                            <a href="/user/profile/{{ Auth::user()->id }}"><i class="fa-regular fa-user mx-1"></i></a>
                        @else
                            <a href="/admin/profile/{{ Auth::user()->id }}"><i class="fa-regular fa-user mx-1"></i></a>
                        @endif
                        <a href=""><i class="fa-regular fa-bookmark mx-1"></i></a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
