@extends('layouts.dashboardLayout')
@section('content')
<form method="POST" action="{{ url('/guru/updateProfil') }}">
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
                    value="" required autocomplete="nama" autofocus>
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
                    name="email" value="" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="nip" class="col-sm-2 col-form-label">{{ __('Nip') }}</label>
            <div class="col-sm-10">
                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    value="" required autocomplete="nip" autofocus>
                @error('nip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label">{{ __('Jabatan') }}</label>
            <div class="col-sm-10">
                <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror"
                    name="jabatan" value="" autocomplete="jabatan" autofocus>
                @error('jabatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="tittle" class="col-sm-2 col-form-label">{{ __('Tittle') }}</label>
            <div class="col-sm-10">
                <input id="tittle" type="text" class="form-control @error('tittle') is-invalid @enderror"
                    name="tittle" value="" autocomplete="tittle" autofocus>
                @error('tittle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
            <div class="col-sm-10">
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                    name="alamat" value="" autocomplete="alamat" autofocus>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="no_tlp" class="col-sm-2 col-form-label">{{ __('No. Tlp') }}</label>
            <div class="col-sm-10">
                <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                    name="no_tlp" value="" autocomplete="no_tlp" autofocus>
                @error('no_tlp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Foto <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                        <input type="file" name="image"
                            class="form-control @if ($errors->has('image')) is-invalid @endif"
                            placeholder="Pilih foto">
                        <small>Tipe image : JPG/JPEG/PNG. Max : 10 MB.</small>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>

@endsection
