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
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Selamat datang di SDN Lumingser 01</h5>
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
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Tenaga Pendidik Yang Berkompeten</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Berkomitmen Untuk Mendidik Generasi Penerus Yang Cerdas dan Berkarakter.</p>
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
    <!-- Informasi Terkini -->
    <div class="news-portal container my-5">
        <div class="header text-center mb-4">
            <h2 class="fw-bold">Informasi Terkini</h2>
            <div class="line-separator mx-auto"></div>
        </div>
        <div class="news-list row g-4">
            @foreach ($news->take(3) as $item)
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

    <hr class="separator">

    <section class="row">
        <section class="col-12">
            {{-- Judul Galeri Foto --}}
            <div class="section-title text-center mb-4">
                <h2 class="fw-bold">Foto Kegiatan</h2>
                <div class="line-separator mx-auto"></div>
            </div>
    
            {{-- Foto Galeri --}}
            <div class="row">
                @foreach ($photos->take(3) as $photo)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card bg-image hover-overlay ripple shadow-1-strong rounded">
                            <img src="{{ asset('storage/' . $photo->image_path) }}" class="w-100 gallery-image" alt="{{ $photo->title }}" data-bs-toggle="modal" data-bs-target="#imageModal{{ $photo->id }}" />
                        </div>
                    </div>
    
                    {{-- Modal for Image --}}
                    <div class="modal fade" id="imageModal{{ $photo->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $photo->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel{{ $photo->id }}">{{ $photo->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/' . $photo->image_path) }}" class="img-fluid rounded" alt="{{ $photo->title }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <div class="text-center mt-4 mb-4">
                <a href="{{ url('galery') }}" class="btn btn-primary mt-auto">Lihat Galeri</a>
            </div>
    
            <hr class="separator">
    
            {{-- Video YouTube Section --}}
            <div class="section-title text-center mb-4">
                <h2 class="fw-bold">Video Kami</h2>
                <div class="line-separator mx-auto"></div>
            </div>
            <div class="row mt-4">
                @foreach ($videos->take(3) as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <iframe width="100%" height="200" src="{{ $video->youtube_url }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
    
            {{-- Tombol YouTube --}}
            <div class="text-center mt-4" style="margin-bottom: 40px;">
                <a href="https://www.youtube.com/@sdnegerilumingser0152" target="_blank" class="btn yt-custom">
                    <i class="bi bi-youtube"></i>
                    SDN LUMINGSER 01
                </a>
        </section>
    </section>

    <div class="welcome-overlay">
        <h1 class="display-1 text-white"><span class="typing-text"></span></h1>
    </div>
</div>
@endsection
