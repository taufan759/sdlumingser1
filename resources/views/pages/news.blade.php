@extends('layouts.default')
@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container" id="news" style="margin-top: 75px; margin-bottom: 75px;"> 
    <div class="row">
        <div class="col-xl-8">
            <h4>Berita Terbaru</h4>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($newsRandom as $index => $newsRandom)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"> 
                            <a href="{{ '/news/'.$newsRandom->id_title }}">
                                <div class="card rounded-3">
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('storage/' . $newsRandom->image) }}" alt=""
                                            class="card-img-top rounded-3" style="object-fit: cover">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <div class="news overlay-content">
                                                <div class="card-body" id="CarouselRandom">
                                                    <h5 class="card-title">{{$newsRandom->title}}</h5>
                                                    <p class="card-text">{!! Str::limit($newsRandom->content, 200) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-xl-4 pt-xl-0 pt-5 pt-md-3">
            <h4>Berita Terhangat</h4>
            <div class="ratio" style="--bs-aspect-ratio: 119.66%;">
                <div class="card bg-secondary px-3 text-white">
                    <div class="card-body overflow-slider">
                        @foreach ($latesNews as $latesNews)
                            <div id="hotnews"
                                class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                                <div class="ratio ratio-1x1 me-3">
                                    <img src="{{ asset('storage/' . $latesNews->image) }}" alt="thumb"
                                        class="img-fluid img-lg rounded-2" style="object-fit: cover">
                                </div>
                                <div>
                                    <a href="{{ '/news/'.$latesNews->id_title }}">
                                        <span class="fw-bold">{{$latesNews->title}}</span>
                                    </a>
                                    <div>
                                        {{$latesNews->updated_at->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-3" data-aos="fade-up"> 
        <div class="col-12">
            <h4>Semua Berita</h4>
            <div class="card rounded-3">
                <div class="card-body">
                    @foreach ($newsAll as $newsAll)
                        <div id="allnews" class="row p-3 border-bottom">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <img src="{{ asset('storage/'. $newsAll->image) }}" alt="thumb"
                                        class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin pt-2 pt-md-0">
                                <h2 class="font-weight-600 mb-2">
                                    {{$newsAll->title}}
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">#{{$newsAll->category->name}} || </span> {{$newsAll->updated_at->diffForHumans()}}
                                </div>
                                <p class="mb-0">
                                    {!! Str::limit($newsAll->content, 350) !!} <a href="{{ "/news/".$newsAll->id_title }}">Baca Selengkapnya</a>
                                </p>                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection