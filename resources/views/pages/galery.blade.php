@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/galery.css') }}">
<div class="container" style="margin-top: 75px; margin-bottom: 75px;">
    <div class="row">
        <div data-aos="fade-up" class="col text-center">
            <h1 class="gallery-title">GALERI</h1>
            <div class="line-separator mx-auto"></div>
            <h2 class="gallery-subtitle">SDN Lumingser 01</h2>
        </div>
    </div>

    <section class="row">
        <section class="col-12">
            {{-- Foto Galeri --}}
            <div class="row">
                @foreach ($photos as $title => $photoGroup)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card shadow-1-strong rounded">
                            {{-- Carousel --}}
                            <div id="carousel{{ Str::slug($title) }}" class="carousel">
                                <div class="carousel-inner">
                                    @foreach ($photoGroup as $key => $photo)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/' . $photo->image_path) }}" 
                                                 class="d-block w-100 gallery-image" 
                                                 alt="{{ $photo->title }}" 
                                                 data-bs-toggle="modal" 
                                                 data-bs-target="#modal{{ Str::slug($title) }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Modal for Photo Group --}}
                    <div class="modal fade" id="modal{{ Str::slug($title) }}" tabindex="-1" aria-labelledby="modalLabel{{ Str::slug($title) }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel{{ Str::slug($title) }}">{{ $title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="modalCarousel{{ Str::slug($title) }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($photoGroup as $key => $photo)
                                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('storage/' . $photo->image_path) }}" class="d-block w-100" alt="{{ $photo->title }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel{{ Str::slug($title) }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel{{ Str::slug($title) }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Separator Line --}}
            <hr class="gallery-separator">

            {{-- Video YouTube Section --}}
            <div class="section-title text-center mt-4">
                <h3 class="youtube-title">Video YouTube</h3>
                <div class="line-separator mx-auto"></div>
            </div>

            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <iframe width="100%" height="200" src="{{ $video->youtube_url }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>

            {{-- Tombol YouTube --}}
            <div class="text-center mt-4">
                <a href="https://www.youtube.com/@sdnegerilumingser0152" target="_blank" class="btn yt-custom">
                    <i class="bi bi-youtube"></i>
                    SDN LUMINGSER 01
                </a>
            </div>
        </section>
    </section>
</div>
@endsection
