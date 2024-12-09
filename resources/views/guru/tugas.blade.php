@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-book"></i> Tambahkan Tugas Siswa</p>

    <div class="col-md-6 col-lg-5">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">{{ $totalTugas }} Tugas</div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Total Seluruh Tugas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('guru.tugas.store') }}" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row mb-3">
            <label for="users_siswa" class="col-sm-2 col-form-label">{{ __('Siswa') }}</label>
            <div class="col-sm-10">
                <select id="users_siswa" class="form-control @error('users_siswa') is-invalid @enderror" name="users_siswa" required>
                    <option value="" selected>--- Pilih Siswa ---</option>
                    @foreach ($siswa as $user)
                        <option value="{{ $user->id }}" {{ old('users_siswa') == $user->id ? 'selected' : '' }}>
                            {{ $user->nama }}
                        </option>
                    @endforeach
                </select>
                @error('users_siswa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Judul Tugas') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('judul_tugas') is-invalid @enderror" name="judul_tugas" required>
                @error('judul_tugas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Deskripsi') }}</label>
            <div class="col-sm-10">
                <textarea rows="3" class="form-control @error('deskripsi_tugas') is-invalid @enderror" name="deskripsi_tugas" required></textarea>
                @error('deskripsi_tugas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Deadline') }}</label>
            <div class="col-sm-10">
                <input type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" required>
                @error('deadline')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Foto (optional)') }}</label>
            <div class="col-sm-10">
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/*">
                @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('File Tugas (optional)') }}</label>
            <div class="col-sm-10">
                <input type="file" class="form-control @error('file_url') is-invalid @enderror" name="file_url" accept="application/pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx">
                @error('file_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Tambah') }}
                </button>
            </div>
        </div>
    </form>

    <div class="mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Tugas" class="form-control">
        </div>
    </div>

    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama Siswa</th>
                    <th class="text-center">Judul Tugas</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Deadline</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tugas as $item)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $item->siswa->nama }}</td>
                        <td class="text-center">{{ $item->judul_tugas }}</td>
                        <td class="text-center">{{ $item->deskripsi_tugas }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('guru.tugas.detail', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
