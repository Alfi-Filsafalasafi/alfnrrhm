@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mx-3">
                <div class="card-header text-light text-center p-4" style="background:#53D3DE; font-size:20px">{{ __('Login') }}</div>

                <div class="card-body px-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="col-form-label mt-3">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button type="submit" class="btn btn-primary mt-4 w-100">
                                    {{ __('Login') }}
                                </button>
                                <p class="text-center mt-4">Belum punya akun ? <a href="/register">Daftar</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
