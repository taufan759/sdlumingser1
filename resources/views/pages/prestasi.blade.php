@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/prestasi.css') }}">

<div class="container py-5" style="margin-top: 50px">
    <!-- Section Title -->
    <div class="text-center mb-5">
        <h1 class="achievement-title">PRESTASI SISWA</h1>
        <div class="line-separator"></div>
        <h2 class="achievement-subtitle">SDN LUMINGSER 01</h2>
    </div>

    <!-- Grid Prestasi -->
    <div class="achievement-grid">
        @foreach($achievements as $achievement)
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="{{ asset('storage/' . $achievement->image_path) }}" alt="Prestasi" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">{{ $achievement->title }}</h3>
                    <p class="achievement-description">
                        {{ Str::limit($achievement->description, 100) }}
                    </p>
                    <p class="achievement-date">{{ \Carbon\Carbon::parse($achievement->date)->format('d F Y') }}</p>
                    <a href="{{ route('detail-prestasi', $achievement->id) }}" class="achievement-btn">Lihat Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
