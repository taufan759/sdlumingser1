@extends('layouts.dashboardLayout')
@section('content')
<p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Settings Akun</p>
    <form method="POST" action="{{ url('/guru/updateAkun') }}">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
            <div class="col-sm-10">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ auth()->user()->nama }}" required autocomplete="nama" autofocus>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
            <div class="col-sm-10">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ auth()->user()->email }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
            <div class="col-sm-10">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
    </form>

    
@endsection
