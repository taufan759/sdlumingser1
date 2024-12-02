@extends('layouts.default')

@section('content')
<div class="container" style="margin-top: 75px; margin-bottom: 75px;">
    <div class="row">
        <div data-aos="fade-up" class="col text-center">
            <h1>Galeri</h1>
            <h2>SD Negeri Lumingser 01</h2>
        </div>
    </div>
    
    <section class="row">
        <section class="col-12">
            {{-- Array untuk mengelompokkan berita berdasarkan kategori --}}
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

        </section>
    </section>
</div>
@endsection