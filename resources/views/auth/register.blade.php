@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-3">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf

                        <h1 style="text-align: center; md-3">Buat Akun</h1>
                        <div class="d-flex justify-content-center">
                            <h5>Sudah Punya akun?
                                <a href="#" style="color:#047810">
                                    Masuk
                                </a>
                            </h5>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email
                                ITS</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end text-start">Username</label>
                            <div class="col-md-12">
                                <input type="username" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username') }}">
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control @error('nama_user') is-invalid @enderror"
                                    id="nama_user" name="nama_user" value="{{ old('nama_user') }}">
                                @if ($errors->has('nama_user'))
                                    <span class="text-danger">{{ $errors->first('nama_user') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation"
                                class="col-md-4 col-form-label text-md-end text-start">Konfirmasi Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-check; mb-4" style="margin-left: 30px">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"><b>
                                    I agree to the
                                    <a href="#"><u>Terms and Condition</u></a>
                                </b></label>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
