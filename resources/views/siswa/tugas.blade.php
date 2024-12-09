@extends('layouts.dashboardSiswa')

@section('content')
<div class="container mt-4" style="background-color: #F0F4F8; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center" style="color: #007bff; font-weight: bold;">Daftar Tugas</h3>
    @if($tugasSiswa->isEmpty())
        <div class="alert alert-info text-center mt-4" role="alert" style="border-radius: 10px;">
            🎉 Tidak ada tugas untuk saat ini. Tetap semangat belajar! 🚀
        </div>
    @else
        <ul class="list-group mt-4">
            @foreach($tugasSiswa as $item)
            <li class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center" style="border-radius: 10px; margin-bottom: 10px; background-color: #FFFFFF; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <div class="mb-3 mb-md-0">
                    <h5 style="color: #1E88E5; font-weight: bold;">📄 {{ $item->judul_tugas }}</h5>
                    <p style="margin: 0; color: #333;">{{ Str::limit($item->deskripsi_tugas, 50) }}</p>
                    <small><strong>🕒 Deadline:</strong> <span style="color: red;">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</span></small>
                </div>
                <a href="{{ route('siswa.detail-tugas', $item->id) }}" class="btn btn-success btn-sm" style="border-radius: 10px; margin-top: 10px; background-color: #007bff">
                    Lihat Detail
                </a>
            </li>
            @endforeach
        </ul>
    @endif
</div>

<style>
    body {
        background-color: #E8F0FE;
        font-family: 'Arial', sans-serif;
    }

    h3 {
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

    @media (max-width: 768px) {
        .list-group-item {
            flex-direction: column !important;
            align-items: flex-start !important;
            padding: 15px !important;
        }

        .btn {
            align-self: stretch !important;
            text-align: center;
        }
    }
</style>
@endsection
