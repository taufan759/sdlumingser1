@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/prestasi.css') }}">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="achievement-title">PRESTASI SISWA</h1>
            <div class="line-separator"></div>
            <h2 class="achievement-subtitle">SDN LUMINGSER 01</h2>
        </div>

        <!-- Grid Prestasi -->
        <div class="achievement-grid">
            <!-- Item Dummy 1 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="https://via.placeholder.com/300x200" alt="Prestasi 1" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Juara 1 Lomba Matematika</h3>
                    <p class="achievement-description">Siswa kelas 6 memenangkan lomba matematika tingkat kabupaten.</p>
                    <span class="achievement-date">10 Oktober 2024</span>
                </div>
            </div>

            <!-- Item Dummy 2 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="https://via.placeholder.com/300x200" alt="Prestasi 2" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Juara 2 Lomba Sains</h3>
                    <p class="achievement-description">Tim sains SDN Lumingser 01 meraih juara kedua tingkat provinsi.</p>
                    <span class="achievement-date">12 November 2024</span>
                </div>
            </div>

            <!-- Item Dummy 3 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="https://via.placeholder.com/300x200" alt="Prestasi 3" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Juara 3 Lomba Pidato</h3>
                    <p class="achievement-description">Siswa kelas 5 memenangkan lomba pidato tingkat kota.</p>
                    <span class="achievement-date">20 Desember 2024</span>
                </div>
            </div>

            <!-- Item Dummy 4 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="https://via.placeholder.com/300x200" alt="Prestasi 4" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Juara Harapan 1 Futsal</h3>
                    <p class="achievement-description">Tim futsal SDN Lumingser 01 tampil memukau di lomba futsal tingkat kabupaten.</p>
                    <span class="achievement-date">15 Januari 2024</span>
                </div>
            </div>
        </div>
    </div>
@endsection
