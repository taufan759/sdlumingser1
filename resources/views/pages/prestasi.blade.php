@extends('layouts.default')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/prestasi.css') }}">

    <div class="container py-5" style="margin-top: 50px">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h1 class="achievement-title">PRESTASI SISWA</h1>
            <div class="line-separator"></div>
            <h2 class="achievement-subtitle">SDN LUMINGSER 01</h2>
        </div>

        <!-- Grid Prestasi -->
        <div class="achievement-grid">
            <!-- Item 1 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="{{ ('assets/img/Edukasi.jpg') }}" alt="Prestasi" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Penghargaan Terbaik Tahun 2024</h3>
                    <p class="achievement-description">
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p class="achievement-date">20 September 2024</p>
                    <a href="{{ url('detail-prestasi') }}" class="achievement-btn">Lihat Selengkapnya</a>
                </div>
            </div>            
            <!-- Item 2 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="{{ ('assets/img/Festival.jpg') }}" alt="Prestasi" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Penghargaan Terbaik Tahun 2024</h3>
                    <p class="achievement-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, sint?
                    </p>
                    <p class="achievement-date">20 September 2024</p>
                    <a href="{{ url('detail-prestasi') }}" class="achievement-btn">Lihat Selengkapnya</a>
                </div>
            </div>            
            <!-- Item 3 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="{{ ('assets/img/Membaca.jpg') }}" alt="Prestasi" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Penghargaan Terbaik Tahun 2024</h3>
                    <p class="achievement-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorum porro veritatis nihil modi ullam, nesciunt eum delectus suscipit placeat.
                    </p>
                    <p class="achievement-date">20 September 2024</p>
                    <a href="{{ url('detail-prestasi') }}" class="achievement-btn">Lihat Selengkapnya</a>
                </div>
            </div>            
            <!-- Item 4 -->
            <div class="achievement-item">
                <div class="achievement-image-wrapper">
                    <img src="{{ ('assets/img/Bebersih.jpg') }}" alt="Prestasi" class="achievement-image">
                </div>
                <div class="achievement-content">
                    <h3 class="achievement-name">Penghargaan Terbaik Tahun 2024</h3>
                    <p class="achievement-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero neque sed vero perspiciatis nemo debitis fugiat alias aliquid iste, distinctio iusto harum sequi qui, dicta, fuga voluptatum cumque nulla similique necessitatibus? Voluptatem eligendi facilis odio repellendus aliquid eveniet hic. Nostrum possimus ut quia nobis excepturi maxime facilis exercitationem eaque.
                    </p>
                    <p class="achievement-date">20 September 2024</p>
                    <a href="{{ url('detail-prestasi') }}" class="achievement-btn">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection