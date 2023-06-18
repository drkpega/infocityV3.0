@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-3">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf

                        <h1 style="text-align: center; md-3">Login</h1>

                        <div class="mb-4">
                            <label for="email"
                                class="col-md-5 col-form-label text-md-end text-start">Email</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <a href="#" style="text-decoration: none; color: black">
                            <p style="text-align:right"><b>Lupa Password?<b></p>
                        </a>
                        <div class="form-check; mb-4" style="margin-left: 30px">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"><b>
                                    Ingat saya
                                </b></label>
                        </div>

                        <div class="mb-4 row" style="align-items: center">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary center" value="Login">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
