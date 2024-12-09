@extends('layouts.dashboardSiswa')

@section('content')
<div class="container mt-4" style="background-color: #F0F4F8; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center" style="color: #555; margin-bottom: 20px; font-weight: bold;">Halo {{ $siswa->nama }}, Yuk cek tugasmu di bawah ini!</h3>
    @isset($tugas)
        <div class="row mb-4">
            <div class="col-md-4 text-center">
                @if($tugas->foto)
                    <div class="mb-3">
                        <img src="{{ asset('storage/tugas/' . $tugas->foto) }}" alt="Foto Tugas" class="img-fluid" 
                        style="max-width: 100%; border-radius: 15px; cursor: pointer; border: 4px solid #007bff; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);"
                        data-bs-toggle="modal" data-bs-target="#fotoModal">
                        <p class="mt-2" style="color: #007bff;">Klik gambar untuk memperbesar.</p>
                    </div>
                @else
                    <p>Tidak ada foto tugas yang diunggah.</p>
                @endif
            </div>
            <div class="col-md-8">
                <h4 style="color: #007bff; font-weight: bold;">{{ $tugas->judul_tugas }}</h4>
                <p style="color: #666;">{{ $tugas->deskripsi_tugas }}</p>
                <p><strong>🕒 Deadline:</strong> <span style="color: #d9534f;">{{ \Carbon\Carbon::parse($tugas->deadline)->format('d F Y') }}</span></p>
                @if($tugas->file_url)
                    <a href="{{ asset('storage/tugas/' . $tugas->file_url) }}" class="btn btn-secondary" target="_blank" style="border-radius: 10px;">
                        <i class="fa-solid fa-download"></i> Download File Tugas
                    </a>
                @else
                    <p>Tidak ada file tugas yang diunggah.</p>
                @endif
            </div>
        </div>
        <hr>
        <a href="{{ route('siswa.tugas') }}" class="btn btn-outline-secondary mt-3" style="border-radius: 10px;">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Tugas
        </a>
    @else
        <h4 style="color: #007bff;">Daftar Tugas</h4>
        @if($tugasSiswa->isEmpty())
            <div class="alert alert-info text-center mt-4" role="alert" style="border-radius: 10px;">
                🎉 Tidak ada tugas untuk saat ini. Tetap semangat belajar! 🚀
            </div>
        @else
            <ul class="list-group mt-4">
                @foreach($tugasSiswa as $item)
                <li class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center" style="border-radius: 10px; margin-bottom: 10px; background-color: #FFFFFF; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                    <div class="mb-3 mb-md-0">
                        <h5 style="color: #555; font-weight: bold;">📄 {{ $item->judul_tugas }}</h5>
                        <p style="margin: 0; color: #666;">{{ Str::limit($item->deskripsi_tugas, 50) }}</p>
                        <small><strong>🕒 Deadline:</strong> <span style="color: #d9534f;">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</span></small>
                    </div>
                    <a href="{{ route('siswa.detail-tugas', $item->id) }}" class="btn btn-outline-primary btn-sm" style="border-radius: 10px; margin-top: 10px;">
                        Lihat Tugas
                    </a>
                </li>
                @endforeach
            </ul>
        @endif
    @endif
</div>

<!-- Modal untuk Foto Tugas -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #F0F4F8; color: #007bff;">
                <h5 class="modal-title" id="fotoModalLabel" style="font-weight: bold">Foto Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($tugas->foto)
                    <img src="{{ asset('storage/tugas/' . $tugas->foto) }}" alt="Foto Tugas Besar" class="img-fluid" style="border-radius: 15px;">
                @else
                    <p>Tidak ada foto tugas yang diunggah.</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary mt-3" style="border-radius: 10px;" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    h3, h4 {
        font-family: 'Arial', sans-serif;
    }

    .btn {
        font-family: 'Arial', sans-serif;
    }

    .list-group-item {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .list-group-item:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

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
    }
</style>
@endsection
