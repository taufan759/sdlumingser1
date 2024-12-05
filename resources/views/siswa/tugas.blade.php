@extends('layouts.dashboardSiswa')

@section('content')
<div class="container mt-4" style="background-color: #f9f9f9; border-radius: 10px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="card-header text-center" style="background-color: #007bff; color: white;">
                    <h3 class="card-title">Tugas Untuk {{ auth()->user()->nama }}</h3>
                </div>

                <div class="card-body">
                    @isset($tugas) {{-- Jika tugas ada, tampilkan detail tugas --}}
                        <div class="row mb-3">
                            <div class="col-md-4 text-center">
                                @if($item->foto)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/tugas/' . $item->foto) }}" alt="Foto Tugas" class="img-fluid" style="max-width: 100%; border-radius: 15px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#fotoModal">
                                        <p class="mt-2" style="color: #007bff;">Klik gambar untuk memperbesar.</p>
                                    </div>
                                @else
                                    <p>Tidak ada foto tugas yang diunggah.</p>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h4 style="color: #007bff;">{{ $tugas->judul_tugas }}</h4>
                                <p class="card-text">{{ $tugas->deskripsi_tugas }}</p>
                                <p class="card-text"><strong>Deadline:</strong> <span style="color: red;">{{ \Carbon\Carbon::parse($tugas->deadline)->format('d F Y') }}</span></p>
                                @if($tugas->file_url)
                                    <a href="{{ asset('storage/tugas/' . $tugas->file_url) }}" class="btn btn-primary" target="_blank">
                                        <i class="fa-solid fa-download"></i> Download File Tugas
                                    </a>
                                @else
                                    <p>Tidak ada file tugas yang diunggah.</p>
                                @endif
                            </div>
                        </div>

                        <hr>
                        <h5 style="color: #007bff;">Kirim Tugas</h5>
                        <form action="{{ route('tugas.submit', $tugas->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="form-label">Pilih File Tugas</label>
                                <input type="file" class="form-control" id="file" name="file" accept=".pdf,.doc,.docx" required>
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Kirim</button>
                        </form>

                    @else {{-- Jika tidak ada tugas yang sedang dilihat, tampilkan daftar tugas --}}
                        <h4 style="color: #007bff;">Daftar Tugas</h4>
                        @if($tugasSiswa->isEmpty())
                            <p>Tidak ada tugas untuk saat ini.</p>
                        @else
                            <ul class="list-group">
                                @foreach($tugasSiswa as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="border-radius: 10px; margin-bottom: 10px; background-color: #e1f5fe;">
                                    <div>
                                        <strong style="font-size: 1.1em;">{{ $item->judul_tugas }}</strong>
                                        <p>{{ Str::limit($item->deskripsi_tugas, 50) }}</p>
                                        <small><strong>Deadline:</strong> <span style="color: red;">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</span></small>
                                    </div>
                                    <a href="{{ route('siswa.detail-tugas', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i> Lihat detail</a>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Foto Tugas -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff; color: white;">
                <h5 class="modal-title" id="fotoModalLabel">Foto Tugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($item->foto)
                    <img src="{{ asset('storage/tugas/' . $item->foto) }}" alt="Foto Tugas Besar" class="img-fluid" style="border-radius: 15px;">
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
    body {
        background-color: #e3f2fd;
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
