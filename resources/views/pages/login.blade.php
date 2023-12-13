@extends('layouts.default')

@section('content')
<div class="container ">
    <div class="row mx-5 vh-100 d-flex align-items-center justify-content-center">
        <div class="card rounded-4 p-0 p-md-5" style="max-width: 500px;">
            <div class="card-body mx-auto my-auto text-center">
                <h1 class="pb-3">{{ __('Login') }}</h1>
                <form method="POST" action="{{ url('login') }}">
                    @csrf

                    <div class="mb-3 row">
                        <label for="login" class="col-md-4 col-form-label">{{ __('NIS/Email') }}</label>
                        <div class="col-md-8">
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                            @error('login')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="mb-3">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
