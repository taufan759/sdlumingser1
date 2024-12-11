@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"><i class="fa-solid fa-pencil-alt"></i> Edit Prestasi</p>

    <div class="card shadow-info mb-3">
        <div class="card-body">
            <form action="{{ route('achievement.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Judul Prestasi</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $achievement->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="5" required>{{ $achievement->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ $achievement->date }}" required>
                </div>
                <div class="form-group">
                    <label for="image_path">Foto</label>
                    <input type="file" name="image_path" id="image_path" class="form-control">
                    <small>Biarkan kosong jika tidak ingin mengganti foto</small>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('achievement') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Prestasi
                </a>
            </form>
        </div>
    </div>
@endsection
