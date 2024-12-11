@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"><i class="fa-solid fa-trophy"></i> Tambahkan Prestasi</p>

    <div class="col-md-6 col-lg-5">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">{{ $achievements->count() }} Prestasi</div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Total Prestasi yang Dicatat</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('achievement.store') }}" enctype="multipart/form-data">
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
            <label class="col-sm-2 col-form-label">{{ __('Judul Prestasi') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Deskripsi') }}</label>
            <div class="col-sm-10">
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" required></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Tanggal') }}</label>
            <div class="col-sm-10">
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" required>
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Penyelenggara') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('organizer') is-invalid @enderror" name="organizer" required>
                @error('organizer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Lokasi') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" required>
                @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Nama Siswa') }}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('student_name') is-invalid @enderror" name="student_name" required>
                @error('student_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Foto') }}</label>
            <div class="col-sm-10">
                <input type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                @error('image_path')
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

    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Judul</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($achievements as $achievement)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td>{{ $achievement->title }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/' . $achievement->image_path) }}" alt="{{ $achievement->title }}" width="100">
                        </td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($achievement->date)->format('d F Y') }}</td>
                        <td class="text-center">
                          <a href="{{ route('achievement.edit', $achievement->id) }}" class="btn btn-warning btn-sm">
                              <i class="fa-solid fa-edit"></i>
                          </a>
                          <form action="{{ route('achievement.destroy', $achievement->id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                  <i class="fa-solid fa-trash"></i>
                              </button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
