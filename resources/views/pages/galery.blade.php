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
                @foreach ($galery as $galery)
                    @if ($galery->image)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card bg-image hover-overlay ripple shadow-1-strong rounded">
                                <img src="{{ asset('storage/' . $galery->image) }}" class="w-100 gallery-image" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal{{ $galery->id_title }}" />
                            </div>
                        </div>

                        {{-- Modal for Image --}}
                        <div class="modal fade" id="imageModal{{ $galery->id_title }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $galery->id_title }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel{{ $galery->id_title }}">Foto Galeri</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('storage/' . $galery->image) }}" class="img-fluid rounded" alt="Gallery Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

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