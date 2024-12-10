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
            <img src="{{ asset('assets/img/Festival.jpg') }}" alt="Prestasi Detail" class="achievement-detail-image"> 
        </div>
        <div class="achievement-detail-content">
            <h2 class="achievement-name">Penghargaan Terbaik Tahun 2024</h2>
            <p class="achievement-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore corrupti delectus ab, mollitia reprehenderit incidunt non praesentium quam, dolor error officiis perspiciatis fuga corporis nihil voluptatem cumque! Eum et dicta dolores architecto quibusdam iure vel corporis, sit maiores est qui nihil deleniti cum rem inventore placeat quisquam magnam aliquid! Similique.
            </p>
            <p class="achievement-details">
                <strong>Tanggal Kompetisi:</strong> 20 September 2024 <br>
                <strong>Penyelenggara:</strong> Guru dan Staff <br>
                <strong>Lokasi:</strong> Halaman Sekolah <br>
                <strong>Siswa Peraih Prestasi:</strong> Fulan Bin Fulan (Kelas 6)
            </p>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('/prestasi') }}" class="achievement-btn">Kembali ke Daftar Prestasi</a>
    </div>
</div>
@endsection
