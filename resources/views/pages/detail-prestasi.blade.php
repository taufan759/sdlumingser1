@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/detail-prestasi.css') }}">

<div class="container py-5" style="margin-top: 50px">
    <div class="text-center mb-4">
        <h1 class="detail-achievement-title">Detail Prestasi</h1>
        <div class="line-separator"></div>
    </div>

    <!-- Detail Prestasi -->
    <div class="achievement-detail">
        <div class="achievement-detail-image-wrapper">
            <img src="{{ asset('storage/' . $achievement->image_path) }}" alt="Prestasi Detail" class="achievement-detail-image"> 
        </div>
        <div class="achievement-detail-content">
            <h2 class="achievement-name">{{ $achievement->title }}</h2>
            <p class="achievement-description">{{ $achievement->description }}</p>
            <p class="achievement-details">
                <strong>Tanggal Kompetisi:</strong> {{ \Carbon\Carbon::parse($achievement->date)->format('d F Y') }}<br>
                <strong>Penyelenggara:</strong> {{ $achievement->organizer }}<br>
                <strong>Lokasi:</strong> {{ $achievement->location }}<br>
                <strong>Siswa Peraih Prestasi:</strong> {{ $achievement->student_name }}
            </p>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('prestasi') }}" class="achievement-btn">Kembali ke Daftar Prestasi</a>
    </div>
</div>
@endsection
