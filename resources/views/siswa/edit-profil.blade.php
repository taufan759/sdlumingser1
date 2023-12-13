@extends('layouts.dashboardSiswa')
@section('content')

<p class="font-weight-bold"><i class="fa-solid fa-gears"></i> Edit {{ $siswa->nama_siswa }}.</p>
<form method="POST" action="{{ url('/update/profil/'.$siswa->id ) }}" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Foto <span class="text-danger">*</span></label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control @if ($errors->has('image')) is-invalid @endif" placeholder="Pilih foto">
            <small>Tipe image : JPG/JPEG/PNG. Max : 10 MB.</small>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="col-md-2 mt-2">
                <img src="{{ asset('storage/' . $siswa->image) }}" alt="{{ $siswa->nama_siswa }}"
                    class="img-fluid rounded">
            </div>
        </div>

    </div>

    <div class="row mb-3">
        <label for="nama_siswa" class="col-sm-2 col-form-label">{{ __('Nama Siswa') }}</label>
        <div class="col-sm-10">
            <input required id="nama_siswa" type="text" class="form-control @error('nama_siswa') is-invalid @enderror"
                name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" autocomplete="nama_siswa" autofocus>
            @error('nama_siswa')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="tempat_tanggal_lahir_siswa" class="col-sm-2 col-form-label">{{ __('TTGL') }}</label>
        <div class="col-sm-10">
            <input placeholder="ex: Tegal, 10 Desember 2021" required id="tempat_tanggal_lahir_siswa" type="text" class="form-control @error('tempat_tanggal_lahir_siswa') is-invalid @enderror"
                name="tempat_tanggal_lahir_siswa" value="{{ old('tempat_tanggal_lahir_siswa', $siswa->tempat_tanggal_lahir_siswa) }}"  autocomplete="tempat_tanggal_lahir_siswa" autofocus>
            @error('tempat_tanggal_lahir_siswa')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="kelas" class="col-sm-2 col-form-label">{{ __('Kelas') }}</label>
        <div class="col-sm-10">
            <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror"
                name="kelas" value="{{ old('kelas', $siswa->kelas) }}"  autocomplete="kelas" autofocus>
            @error('kelas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="alamat_lengkap" class="col-sm-2 col-form-label">{{ __('Alamat Lengkap') }}</label>
        <div class="col-sm-10">
            <input id="alamat_lengkap" type="text" class="form-control @error('alamat_lengkap') is-invalid @enderror"
                name="alamat_lengkap" value="{{ old('alamat_lengkap', $siswa->alamat_lengkap) }}"  autocomplete="alamat_lengkap" autofocus>
            @error('alamat_lengkap')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="nama_ibu" class="col-sm-2 col-form-label">{{ __('Ibu') }}</label>
        <div class="col-sm-10">
            <input id="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror"
                name="nama_ibu" value="{{ old('nama_ibu', $siswa->nama_ibu) }}"  autocomplete="nama_ibu" autofocus>
            @error('nama_ibu')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="nama_ayah" class="col-sm-2 col-form-label">{{ __('Ayah') }}</label>
        <div class="col-sm-10">
            <input id="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror"
                name="nama_ayah" value="{{ old('nama_ayah', $siswa->nama_ayah) }}"  autocomplete="nama_ayah" autofocus>
            @error('nama_ayah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="no_tlp" class="col-sm-2 col-form-label">{{ __('No Telepon') }}</label>
        <div class="col-sm-10">
            <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                name="no_tlp" value="{{ old('no_tlp', $siswa->no_tlp) }}"  autocomplete="no_tlp" autofocus>
            @error('no_tlp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="kelamin" class="col-sm-2 col-form-label">{{ __('Kelamin') }}</label>
        <div class="col-sm-10">
            <select id="kelamin" class="form-control @error('kelamin') is-invalid @enderror" name="kelamin" >
                <option value="">--- Pilih Jenis Kelamin ---</option>
                <option value="L" {{ old('kelamin', $siswa->kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('kelamin', $siswa->kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('kelamin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="foto_kk" class="col-sm-2 col-form-label">Foto Kartu Keluarga<span class="text-danger">*</span></label>
        <div class="col-sm-10">
            <input type="file" name="foto_kk"
                class="form-control @if ($errors->has('foto_kk')) is-invalid @endif" placeholder="Pilih foto">
            <small>Tipe image : JPG/JPEG/PNG. Max : 10 MB.</small>
            @error('foto_kk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="col-md-3 mt-2">
                <img src="{{ asset('storage/' . $siswa->foto_kk) }}" alt="{{ $siswa->nama_siswa }}"
                    class="img-fluid rounded">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">
                {{ __('Edit Sekarang') }}
            </button>
        </div>
    </div>
</form>

@endsection
