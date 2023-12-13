@extends('layouts.dashboardLayout')
@section('content')

@if ($teacher)
<p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Data identitas anda lengkap.</p>

<div class="container-fluid">
    <div class="row">
        <!-- Left Side - Photo -->
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $teacher->image) }}" alt="{{ $teacher->nama }}" class="img-fluid rounded">
        </div>

        <!-- Right Side - teachers -->
        <div class="col-md-8 mt-2">
            <div class="input-group input-group-sm mb-3">
                <a><span class="badge text-bg-warning p-2 rounded">Akun {{ $teacher->nama }}</span></a>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">NAMA AKUN : </span>
                <input disabled value="{{ $teacher->user->nama }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">EMAIL : </span>
                <input disabled value="{{ $teacher->user->email }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">NIP : </span>
                <input disabled value="{{ $teacher->user->NIP }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Roles : </span>
                @php
                    switch ($teacher->user->roles) {
                        case 1:
                            $roleText = 'Kepala Sekolah';
                            break;
                        case 2:
                            $roleText = 'Guru';
                            break;
                        case 3:
                            $roleText = 'Siswa';
                            break;
                        default:
                            $roleText = 'Unknown Role';
                    }
                @endphp
                <input disabled value="{{ $roleText }}" type="text" class="form-control">
            </div>

            <div class="input-group input-group-sm mb-3">
                <a><span class="badge text-bg-warning p-2 rounded">Identitas {{ $teacher->nama }}</span></a>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="badge text-bg-success p-2 rounded" id="inputGroup-sizing-sm">{{ $teacher->title }} </span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">NAMA : </span>
                <input disabled value="{{ $teacher->nama }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">NIP : </span>
                <input disabled value="{{ $teacher->NIP }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Staff : </span>
                @php
                switch ($teacher->roles) {
                    case 1:
                        $roleText = 'Kepala Sekolah';
                        break;
                    case 2:
                        $roleText = 'Guru';
                        break;
                    case 3:
                        $roleText = 'Staff Admin';
                        break;
                    default:
                        $roleText = 'Unknown Role';
                }
            @endphp
                <input disabled value="{{ $roleText }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">JABATAN : </span>
                <input disabled value="{{ $teacher->jabatan }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">ALAMAT : </span>
                <input disabled value="{{ $teacher->alamat }}" type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">NO TLP : </span>
                <input disabled value="{{ $teacher->no_tlp }}" type="text" class="form-control">
            </div>
        </div>
    </div>

</div>
<div class=" mb-3 mt-4 d-flex flex-row-reverse bd-highlight">
    <div class="mr-0">
        <a href="" class="btn btn-primary">
          Edit Profil
        </a>
    </div>
</div>
@else
<p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Lengkapi identitas anda.</p>
<form method="POST" action="{{ url('/guru/profil') }}" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Foto <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control @if ($errors->has('image')) is-invalid @endif"
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
            <label for="tittle" class="col-sm-2 col-form-label">{{ __('Title') }}</label>
            <div class="col-sm-10">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    name="title" value="{{ old('title') }}" required placeholder="Guru Kelas 1" autocomplete="title"
                    autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
            <div class="col-sm-10">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="roles" class="col-sm-2 col-form-label">{{ __('Type Jabatan') }}</label>
            <div class="col-sm-10">
                <select id="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" required>
                    <option value="">--- Select Type Jabatan ---</option>
                    <option value="1" {{ old('roles') == '1' ? 'selected' : '' }}>Kepala Sekolah</option>
                    <option value="2" {{ old('roles') == '2' ? 'selected' : '' }}>Guru</option>
                    <option value="3" {{ old('roles') == '3' ? 'selected' : '' }}>Staf</option>
                </select>
                @error('roles')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="nip" class="col-sm-2 col-form-label">{{ __('NIP') }}</label>
            <div class="col-sm-10">
                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    value="{{ auth()->user()->NIP }}" disabled autocomplete="nip" autofocus>
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
                    name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" autofocus>
                @error('jabatan')
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
                    name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
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
                    name="no_tlp" value="{{ old('no_tlp') }}" autocomplete="no_tlp" autofocus>
                @error('no_tlp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Simpan') }}
                </button>
            </div>
        </div>
    </form>
    @endif

@endsection
