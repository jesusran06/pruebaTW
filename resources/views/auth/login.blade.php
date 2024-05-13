@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div id="login" class="container-fluid align-items-center d-flex justify-items-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <h1 class="title d-flex justify-content-center">Login</h1>
                </br>
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <div class="row mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="row mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 text-center">
                    <button class="btn btn-secondary btn-lg" id="registerButton">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="col-md-6 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('registerButton').addEventListener('click', function() {
            window.location.href = "{{ route('register') }}";
        });
    </script>
@endsection