@extends('layouts.default')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="jumbotron carousel slide mb-4" data-bs-ride="carousel">
            <div class="jumbotron carousel-inner">
                <div class="carousel-item active rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel1.jpg') }}" class="d-block w-100 object-fit-cover rounded-4"
                        style="height: 80vh">
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" class="d-block w-100 object-fit-cover rounded-4"
                        style="height: 80vh">
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel3.jpg') }}" class="d-block w-100 object-fit-cover rounded-4"
                        style="height: 80vh">
                </div>
            </div>
        </div>

        <div class="row py-5 align-items-center">
            <!-- Bagian Gambar Kepala Sekolah -->
            <div class="col-12 col-lg-5 text-center">
                <img data-aos="zoom-in" src="{{ asset('assets/img/kepsek.png') }}" alt="Kepala Sekolah" class="img-fluid rounded-circle shadow-lg" style="max-width: 80%; border: 5px solid #f8f9fa;">
            </div>
        
            <!-- Bagian Sambutan -->
            <div class="col-12 col-lg-7">
                <div data-aos="fade-up" class="p-4">
                    <h1 class="display-5 text-primary mb-3">Sambutan Kepala Sekolah</h1>
                    <p class="lead text-muted">Selamat datang di laman resmi <span class="font-weight-bold">SD Negeri Kesamiran 01</span>. Kami hadir untuk menyajikan informasi terkini dan momen berharga dari komunitas sekolah kami.</p>
                    <p>Kami percaya bahwa setiap siswa adalah bintang yang cemerlang. Dengan dukungan dari staf yang berdedikasi, kami berkomitmen menciptakan generasi yang cerdas, berakhlak mulia, dan siap menghadapi tantangan masa depan.</p>
                    <p class="text-muted font-italic">Salam hangat,</p>
                    <p class="font-weight-bold mb-0">Ali Rosidi, S.Pd</p>
                    <p class="text-primary">Kepala Sekolah</p>
                </div>
            </div>
        </div>
        
@endsection
