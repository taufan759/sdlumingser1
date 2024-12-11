@extends('layouts.default')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('frontend/css/home.css') }}" rel="stylesheet">
    <div class="container">
        <div id="carouselExampleIndicators" class="jumbotron carousel slide mb-4" data-bs-ride="carousel">
            <div class="jumbotron carousel-inner">
                <div class="carousel-item active rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Sekolah1.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Selamat Datang di Sekolah Dasar Kami</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Mendidik Generasi Unggul untuk Masa Depan Cerah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Sekolah2.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Belajar dan Bermain</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Menjalani Hari-Hari Menyenangkan di Sekolah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Sekolah3.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
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

        <div class="news-portal container my-5">
            <div class="header text-center mb-4">
                <h2 class="display-5 fw-bold">Informasi Terkini</h2>
            </div>
            <div class="news-list row g-4">
                @foreach ($news as $item)
                <div class="news-item col-12 col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="image">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="card-img-top img-fluid" style="object-fit: cover; height: 200px; width: 100%;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-truncate" title="{{ $item->title }}" style="font-size: 1.25rem;">{{ $item->title }}</h5>
                            <p class="card-text text-truncate" title="{{ $item->description }}" style="font-size: 0.9rem;">{{ Str::limit($item->description, 100, '...') }}</p>
                            <a href="{{ url('news') }}" class="btn btn-primary mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>        

    <div class="welcome-overlay">
        <h1 class="display-1 text-white"><span class="typing-text"></span></h1>
    </div>
@endsection
