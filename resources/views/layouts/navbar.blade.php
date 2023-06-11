<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="./img/navbarlogo" alt="/logoinfocity">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav m-auto ">
                <form action="/postingan/search" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2 mr-2" type="text" placeholder="Mau cari info apa?"
                        aria-label="Search" value="{{ old('search') }}">
                    <button class="btn btn-primary" type="submit" value="CARI"><i class="fas fa-search"></i></button>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket mx-1"></i></a>
                        <a href=""><i class="fa-regular fa-user mx-1"></i></a>
                        <a href=""><i class="fa-regular fa-bookmark mx-1"></i></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
