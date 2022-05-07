@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 text-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <img src="https://www.svgrepo.com/show/269911/products-wine.svg" alt="" class="w-25 p-3 bg-dark bg-opacity-50 rounded">
                </div>
                <br>
                <div class="text-center">
                    <h3 class="display-5 text-dark">{{ __('Login') }}</h3>
                </div>
                
                <br>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Nombre') }}</span></label>

                    <div class="col-md-6">
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Password') }}</span></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-auto offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-auto offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;{{ __('Login') }}
                        </button>

                        
                    </div>
                </div>
                <p class="text-center mt-5">¿No tienes una cuenta?
                    <a class="btn btn-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </p>
                @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
            </form>
        </div>
    </div>
</div>
@endsection
