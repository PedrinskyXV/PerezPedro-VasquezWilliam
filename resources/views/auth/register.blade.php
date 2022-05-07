@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-8 text-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <img src="https://www.svgrepo.com/show/269911/products-wine.svg" alt="" class="w-25 p-3 bg-dark bg-opacity-50 rounded">
                </div>
                <br>
                <div class="text-center">
                    <h3 class="display-5 text-dark">{{ __('Register') }}</h3>
                </div>
                <br>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Name') }}</span></label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Correo') }}</span></label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Password') }}</span></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><span class="badge bg-dark">{{ __('Confirm Password') }}</span></label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0 mt-5">
                    <div class="col-auto offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-person-badge"></i>&nbsp;&nbsp;{{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
