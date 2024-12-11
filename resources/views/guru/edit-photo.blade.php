@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"><i class="fa-solid fa-pencil-alt"></i> Edit Photo</p>

    <div class="card shadow-info mb-3">
        <div class="card-body">
            <form action="{{ route('guru.photo.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $photo->title }}" required>
                </div>
                <div class="form-group">
                    <label for="image_path">Photo</label>
                    <input type="file" name="image_path" id="image_path" class="form-control">
                    <small>Leave blank if you don't want to change the photo</small>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('guru.photo') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Foto
                </a>
            </form>
        </div>
    </div>
@endsection
