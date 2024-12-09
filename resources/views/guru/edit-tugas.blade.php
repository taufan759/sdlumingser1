@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-pencil-alt"></i> Edit Tugas</p>

    <div class="card shadow-info mb-3">
        <div class="card-body">
            <form action="{{ route('guru.tugas.update', $tugas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="users_siswa" class="form-label">Siswa</label>
                    <select class="form-select @error('users_siswa') is-invalid @enderror" id="users_siswa" name="users_siswa" required>
                        <option value="" disabled>Pilih Siswa</option>
                        @foreach($siswa as $s)
                            <option value="{{ $s->id }}" {{ $tugas->users_id == $s->id ? 'selected' : '' }}>
                                {{ $s->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('users_siswa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="judul_tugas" class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control @error('judul_tugas') is-invalid @enderror" id="judul_tugas" name="judul_tugas" value="{{ old('judul_tugas', $tugas->judul_tugas) }}" required>
                    @error('judul_tugas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_tugas" class="form-label">Deskripsi Tugas</label>
                    <textarea class="form-control @error('deskripsi_tugas') is-invalid @enderror" id="deskripsi_tugas" name="deskripsi_tugas" rows="3">{{ old('deskripsi_tugas', $tugas->deskripsi_tugas) }}</textarea>
                    @error('deskripsi_tugas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline" name="deadline" value="{{ old('deadline', $tugas->deadline) }}" required>
                    @error('deadline')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Tugas</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*">
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                </div>

                <div class="mb-3">
                    <label for="file_url" class="form-label">File Tugas</label>
                    <input type="file" class="form-control @error('file_url') is-invalid @enderror" id="file_url" name="file_url" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                    @error('file_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti file tugas.</small>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-save"></i> Simpan Perubahan
                </button>

                <a href="{{ route('guru.tugas') }}" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Tugas
                </a>
            </form>
        </div>
    </div>
@endsection