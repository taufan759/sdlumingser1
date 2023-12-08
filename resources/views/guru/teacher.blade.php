@extends('layouts.dashboardLayout')
@section('content')
<p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Tambahkan identitas lengkap guru</p>
<div class="col-md-6 col-lg-3">
    <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
        <div class="widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-info">{{$guru->count()}}</div>
                    </div>
                    <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89"
                                aria-valuemin="0" aria-valuemax="100" style="width: {{$guru->count()}}%;"></div>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left fsize-1">
                    <div class="text-muted opacity-6">Totals Guru</div>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{ url('/guru/teacher') }}" enctype="multipart/form-data">
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
            <label for="users_id" class="col-sm-2 col-form-label">{{ __('Nama Akun') }}</label>
            <div class="col-sm-10">
                <select id="users_id" class="form-control @error('users_id') is-invalid @enderror" name="users_id" required>
                    <option value="">--- Select Akun Guru ---</option>
                    @foreach ($guruUsers as $guruUser)
                        <option value="{{ $guruUser->id }}" {{ old('users_id') == $guruUser->id ? 'selected' : '' }}>
                            {{ $guruUser->nama }}
                        </option>
                    @endforeach
                </select>
                @error('users_id')
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
                    value="{{ old('nip') }}" required autocomplete="nip" autofocus>
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
                    name="no_tlp" value="{{ old('no_tlp') }}" required autocomplete="no_tlp" autofocus>
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
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>

    <div class=" mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Akun" class="form-control">
          </div>
    </div>
    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Foto</th>
                    <th>Akun Guru</th>
                    <th>Title</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Type Pengajar</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No Tlp</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guru as $guru)
                <tr>
                    <td class="text-muted text-center">{{$loop->iteration}}</td>
                    <td>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">
                                        <img width="40" class="rounded-circle" src="{{asset('storage/'.$guru->image)}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">{{ $guru->user->nama  }}</td>
                    <td class="text-center">{{ $guru->title }}</td>
                    <td class="text-center">
                        <div class="badge badge-success">{{ $guru->NIP }}</div>
                    </td>
                    <td class="text-center">{{ $guru->nama }}</td>
                    <td class="text-center">
                        @if($guru->roles == 1)
                            <div class="badge badge-info">Kepala Sekolah</div>
                        @elseif($guru->roles == 2)
                            <div class="badge badge-warning">Guru</div>
                        @else
                        <div class="badge badge-danger">Staff</div>
                        @endif
                    </td>
                    
                    <td class="text-center">{{ $guru->jabatan }}</td>
                    <td class="text-center">{{ $guru->alamat }}</td>
                    <td class="text-center">{{ $guru->no_tlp }}</td>
                    <td class="text-center">
                        <button type="button" id="PopoverCustomT-2"
                        class="btn btn-info btn-sm"><i class="fa-solid fa-user-pen"></i></button>
                        <button type="button" id="PopoverCustomT-2"
                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
