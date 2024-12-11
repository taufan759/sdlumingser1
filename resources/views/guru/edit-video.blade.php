@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"><i class="fa-solid fa-pencil-alt"></i> Edit Video</p>

    <div class="card shadow-info mb-3">
        <div class="card-body">
            <form action="{{ route('guru.video.update', $video->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Judul Video</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $video->title }}" required>
                </div>
                <div class="form-group">
                    <label for="youtube_url">URL YouTube</label>
                    <input type="url" name="youtube_url" id="youtube_url" class="form-control" value="{{ $video->youtube_url }}" required>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('guru.video') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Video
                </a>
            </form>
        </div>
    </div>
@endsection
