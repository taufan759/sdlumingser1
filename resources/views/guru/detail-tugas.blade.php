@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-book"></i> Detail Tugas Siswa</p>

    <div class="card shadow mb-3">
        <div class="card-body">
            <h5 class="card-title">Judul Tugas:</h5>
            <p class="fs-5">{{ $tugas->judul_tugas }}</p>

            <hr>
            
            <strong class="card-text">Deskripsi:</strong>
            <p>{{ $tugas->deskripsi_tugas ?: 'Tidak ada deskripsi.' }}</p>

            <hr>

            <p><strong>Kelas:</strong> <span class="badge bg-info text-white">{{ $tugas->kelas }}</span></p>
            <p><strong>Tanggal Tugas Diberikan:</strong> {{ \Carbon\Carbon::parse($tugas->created_at)->format('d F Y') }}</p>
            <p><strong>Deadline:</strong> <span style="color: red;">{{ \Carbon\Carbon::parse($tugas->deadline)->format('d F Y') }}</span></p>

            <hr>

            <!-- Menampilkan Foto Tugas jika ada -->
            <strong>Foto Tugas:</strong>
            @if($tugas->foto) <!-- Pastikan untuk menyesuaikan ini dengan nama atribut yang benar -->
                <div class="mb-3">
                    <img src="{{ asset('storage/tugas/' . $tugas->foto) }}" alt="Foto Tugas" class="img-fluid" style="max-width: 300px; height: auto; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#fotoModal">
                    <p class="mt-2">Klik gambar untuk memperbesar.</p>
                </div>
            @else
                <p>Tidak ada foto tugas yang diunggah.</p>
            @endif

            <div class="mb-3">
                <strong>File Tugas:</strong>
                @if($tugas->file_url)
                    <a href="{{ asset('storage/tugas/' . $tugas->file_url) }}" class="btn btn-primary" target="_blank">
                        <i class="fa-solid fa-download"></i> Download File Tugas
                    </a>
                @else
                    <p>Tidak ada file tugas yang diunggah.</p>
                @endif
            </div>

            <!-- Menu Edit dan Hapus Tugas -->
            <h6>Aksi:</h6>
            <div class="d-flex gap-2">
                <a href="{{ route('guru.tugas.edit', $tugas->id) }}" class="btn btn-warning">
                    <i class="fa-solid fa-edit"></i> Edit Tugas
                </a>

                <form action="{{ route('guru.tugas.destroy', $tugas->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');" class="mb-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i> Hapus Tugas
                    </button>
                </form>
            </div>

            <a href="{{ route('guru.tugas') }}" class="btn btn-secondary mt-3">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Tugas
            </a>
        </div>
    </div>

    <!-- Modal untuk Foto Tugas -->
    <div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fotoModalLabel">Foto Tugas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($tugas->foto)
                        <img src="{{ asset('storage/tugas/' . $tugas->foto) }}" alt="Foto Tugas Besar" class="img-fluid">
                    @else
                        <p>Tidak ada foto tugas yang diunggah.</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .modal {
            z-index: 1050 !important;
            transition: all 0.3s ease;
        }
        
        .modal-backdrop {
            display: none;
        }
        
        .modal-content {
            margin: 8% auto;
            display: block;
            border-radius: 0.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            background-color: #fff;
        }
        
        .modal-footer {
            border-top: 1px solid #e9ecef;
        }
        
        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            padding: 1rem;
        }
        
        .modal-body img {
            width: 100%;
            height: auto;
            border-radius: 0.25rem;
        }

        @media (max-width: 768px) {
        .modal-content {
        margin: 40% auto; 
        }
        </style>
@endsection