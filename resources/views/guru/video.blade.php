@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"><i class="fa-solid fa-video"></i> Tambahkan Video</p>

    <div class="col-md-6 col-lg-5">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">{{ $videos->count() }} Video</div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Total Video yang Ditambahkan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('guru.video.store') }}">
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
            <label class="col-sm-2 col-form-label">{{ __('Judul Video') }}</label>
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
            <label class="col-sm-2 col-form-label">{{ __('URL YouTube') }}</label>
            <div class="col-sm-10">
                <input type="url" class="form-control @error('youtube_url') is-invalid @enderror" name="youtube_url" required>
                @error('youtube_url')
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
                    <th class="text-center">URL YouTube</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td>{{ $video->title }}</td>
                        <td class="text-center">
                            <a href="{{ $video->youtube_url }}" target="_blank">{{ $video->youtube_url }}</a>
                        </td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($video->created_at)->format('d F Y') }}</td>
                        <td class="text-center">
                          <a href="{{ route('guru.video.edit', $video->id) }}" class="btn btn-warning btn-sm">
                              <i class="fa-solid fa-edit"></i>
                          </a>
                          <form action="{{ route('guru.video.destroy', $video->id) }}" method="POST" style="display:inline;">
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
