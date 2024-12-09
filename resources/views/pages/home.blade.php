@extends('layouts.default')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('frontend/css/home.css') }}" rel="stylesheet">
    <div class="container">
        <div id="carouselExampleIndicators" class="jumbotron carousel slide mb-4" data-bs-ride="carousel">
            <div class="jumbotron carousel-inner">
                <div class="carousel-item active rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Selamat Datang di Sekolah Dasar Kami</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Mendidik Generasi Unggul untuk Masa Depan Cerah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Belajar dan Bermain</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Menjalani Hari-Hari Menyenangkan di Sekolah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Kreativitas Tanpa Batas</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Mengembangkan Bakat dan Potensi Anak Sejak Dini.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    <div class="news-portal">
        <div class="header">
            <div class="info-box">
                <div class="border-box"></div>
                <h2>Informasi Terkini</h2>
            </div>
        </div>
        <div class="news-list">
            @foreach ($news as $item)
            <div class="news-item">
                <div class="text">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ Str::limit($item->description, 100) }}</p>
                    <a href="{{ route('news.show', $item->id) }}" class="read-more">Selengkapnya</a>
                </div>
                <div class="image">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
    

    <div class="welcome-overlay">
        <h1 class="display-1 text-white"><span class="typing-text"></span></h1>
    </div>
@endsection
