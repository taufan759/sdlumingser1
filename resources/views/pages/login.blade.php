@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100 align-items-center d-flex">
        <div class="col-lg-4 col-md-6 col-10">
            <div class="card border-1 shadow-sm rounded-3">
                <div class="card-body p-4 text-center">
                    <h2 class="pb-3 text-primary">{{ __('Selamat Datang') }}</h2>
                    <p class="text-muted mb-4">Silakan log in untuk melanjutkan</p>
                    <form method="POST" action="{{ url('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="login" class="form-label">{{ __('NIS/Email') }}</label>
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                            @error('login')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Masuk') }}
                        </button>

                        @if (Route::has('password.request'))
                            <div class="mt-3 text-center">
                                <a href="{{ route('password.request') }}" class="text-decoration-none">
                                    {{ __('Lupa Kata Sandi?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
    }

    @media (max-width: 576px) {
        .container {
            padding: 20px;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .container {
            padding: 40px;
        }
    }

    @media (min-width: 768px) {
        .container {
            padding: 60px;
        }
    }
</style>
@endsection