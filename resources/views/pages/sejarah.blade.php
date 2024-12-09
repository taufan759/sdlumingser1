@extends('layouts.default')

@section('content')
<div class="container py-5"> 
    <!-- Header Section -->
    <div class="text-center mb-5" style="padding-top: 75px;">
        <h1 class="display-5 fw-bold" style="color: #5b5b5b">Sejarah SD Negeri Lumingser 01</h1>
        <div class="header-with-lines">
            <div class="line black"></div>
            <div class="line blue"></div>
            <div class="line black"></div>
        </div>
        <p class="lead text-muted">Mengenal lebih dekat tentang sekolah dan sejarah berdirinya.</p>
    </div>

    <!-- Sejarah Sekolah dengan teks di sebelah kanan gambar -->
    <section class="history-section mb-5">
    <div class="row justify-content-center align-items-start">
        <!-- Gambar Sekolah di sebelah kiri -->
        <div class="col-md-6">
            <img src="{{ asset('assets/img/Carousel.jpg') }}" 
                 class="img-fluid shadow-lg rounded-4" 
                 style="object-fit: cover; height: 60vh;" 
                 alt="Gambar Sekolah">
        </div>

        <!-- Teks Sejarah di sebelah kanan dan bawah gambar -->
        <div class="col-md-6">
            <p class="text-justify">
                SD Negeri Lumingser 01 berdiri pada tahun 1980 di bawah naungan Dinas Pendidikan Kabupaten Tegal. Berlokasi di Kecamatan Adiwerna, sekolah ini awalnya dibangun untuk memenuhi kebutuhan pendidikan dasar bagi masyarakat sekitar.
            </p>
            <p class="text-justify">
                Seiring waktu, SD Negeri Lumingser 01 terus berkembang, baik dari segi fasilitas maupun kualitas pendidikan. Dengan komitmen untuk memberikan pendidikan yang inklusif dan berkualitas, sekolah ini telah meluluskan ribuan siswa yang kini telah berkontribusi di berbagai bidang.
            </p>
            <p class="text-justify">
                Dengan visi "Menciptakan Generasi Cerdas, Berkarakter, dan Berdaya Saing," SD Negeri Lumingser 01 bertekad untuk terus menjadi pusat pendidikan yang unggul di Kabupaten Tegal. Dilengkapi dengan tenaga pendidik profesional, sekolah ini terus berinovasi dalam metode pembelajaran dan pengembangan siswa.
            </p>
            <p class="text-justify">
                Hingga kini, SD Negeri Lumingser 01 tetap menjadi pilihan utama bagi masyarakat sekitar yang menginginkan pendidikan dasar yang berkualitas dan berkarakter.
            </p>
        </div>
    </div>
</section>


</div>
@endsection
