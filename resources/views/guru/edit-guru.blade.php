@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-pen"></i> Edit Data Guru </p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('guru.update', $teacher->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Foto Guru -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Guru</label>
                        @if ($teacher->image)
                            <img src="{{ asset('storage/' . $teacher->image) }}" alt="{{ $teacher->nama }}" class="img-fluid rounded mb-3">
                        @else
                            <p class="text-muted">Belum ada foto.</p>
                        @endif
                        <input type="file" id="image" name="image" class="form-control">
                    </div>

                    <!-- Title -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="title" class="input-group-text">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $teacher->title }}" required>
                    </div>

                    <!-- Nama -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="nama" class="input-group-text">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $teacher->nama }}" required>
                    </div>

                    <!-- Roles -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="roles" class="input-group-text">Type Jabatan</label>
                        <select id="roles" class="form-control" name="roles" required>
                            <option value="1" {{ $teacher->roles == 1 ? 'selected' : '' }}>Kepala Sekolah</option>
                            <option value="2" {{ $teacher->roles == 2 ? 'selected' : '' }}>Guru</option>
                            <option value="3" {{ $teacher->roles == 3 ? 'selected' : '' }}>Staf</option>
                        </select>
                    </div>

                    <!-- Jabatan -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="jabatan" class="input-group-text">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $teacher->jabatan }}">
                    </div>

                    <!-- Alamat -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="alamat" class="input-group-text">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $teacher->alamat }}">
                    </div>

                    <!-- No Telepon -->
                    <div class="input-group input-group-sm mb-3">
                        <label for="no_tlp" class="input-group-text">No. Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ $teacher->no_tlp }}">
                    </div>

                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
