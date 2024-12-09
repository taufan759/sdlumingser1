@extends('layouts.default')

@section('content')
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
            @php
                $categories = [];
            @endphp

            @foreach ($galery as $item)
                @php
                    $categories[$item->category->name][] = $item;
                @endphp
            @endforeach

            @foreach ($categories as $categoryName => $newsItems)
                <h3 class="mt-4">{{ $categoryName }}</h3> 
                <div class="row">
                    @foreach ($newsItems as $galery)
                        @if ($galery->image) 
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4"> 
                                <div data-aos="fade-up" class="card bg-image hover-overlay ripple shadow-1-strong rounded">
                                    <a href="{{ '/news/' . $galery->id_title }}">
                                        <img src="{{ asset('storage/' . $galery->image) }}" class="w-100" alt="Gallery Image" />
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach

            {{-- Separator Line --}}
            <hr class="gallery-separator">

            <div class="section-title text-center mt-4">
                <h3 class="youtube-title">Video YouTube</h3>
                <div class="line-separator mx-auto"></div>
            </div>

            @php
                $videos = [
                    'https://www.youtube.com/embed/o85C9cqXvV8?si=W_XjYfreq-VawGUd',
                    'https://www.youtube.com/embed/o85C9cqXvV8?si=W_XjYfreq-VawGUd',
                    'https://www.youtube.com/embed/o85C9cqXvV8?si=W_XjYfreq-VawGUd'
                ];
            @endphp

            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <iframe width="100%" height="200" src="{{ $video }}" frameborder="0" allowfullscreen></iframe>
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