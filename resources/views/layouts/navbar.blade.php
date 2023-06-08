<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="./images/infocitynavbarlogo.png" alt="/logoinfocity">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav m-auto "  style="width:70%">
                <form class="d-flex" role="search" action="/postingan/search" method="GET" style="width:100%">
                    <input class="form-control me-2 mr-2" type="text" placeholder="Mau cari info apa?"
                    value="{{ old('search') }}">
                    <input class="btn btn-primary" type="submit" value="SEARCH">
                    {{-- <button class="btn btn-primary" type="submit" value="SEARCH"><i class="fas fa-search"></i></button> --}}
                </form>
            </ul>
            <ul class="navbar-nav ms-auto">
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
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <a href="{{ route('logout') }}"><i class="fas fa-user"></i></a>
                        <a href="{{ route('logout') }}"><i class="fas fa-heart"></i></i></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
