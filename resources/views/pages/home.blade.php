@extends('layouts.default')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
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

        <div class="row py-4 text-center">
            <h1 data-aos="fade-up" class="display-6">Sambutan Kepala Sekolah</h1>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <img data-aos="fade-up" src="{{ asset('assets/img/kepsek.png') }}" alt="" class="img-fluid mb-3">
            </div>
            <div data-aos="fade-up" class="col-12 col-lg-8">
                <h4>Selamat Datang di Laman Web Resmi SD Negeri Kesamiran 01!</h4>

                <p class="lead">Saya, Ali Rosidi, S.Pd, dengan bangga menyambut Anda di platform ini, tempat di mana kita
                    dapat
                    berbagi informasi, pencapaian, dan momen-momen berharga dari kehidupan sekolah kami.</p>

                <p>Di SD Kesamiran 01, kami memandang setiap siswa sebagai bintang yang berpotensi cemerlang. Dengan staf
                    pengajar yang berdedikasi dan kurikulum yang terkini, kami berkomitmen untuk memberikan pendidikan
                    berkualitas yang tidak hanya melibatkan siswa dalam pembelajaran akademis, tetapi juga mendukung
                    perkembangan karakter dan keterampilan sosial mereka.</p>

                <p>Melalui laman web ini, kami berharap dapat memberikan akses yang mudah bagi orang tua, siswa, dan
                    masyarakat untuk mengikuti berbagai kegiatan sekolah, mendapatkan informasi terkini, serta terlibat
                    aktif dalam pembentukan masa depan generasi muda kami.</p>

                <p>Terima kasih atas dukungan Anda, dan mari bersama-sama menciptakan lingkungan belajar yang positif dan
                    inspiratif.</p>

                <p class="font-italic">Salam hormat,</p>

                <p class="font-weight-bold">Ali Rosidi, S.Pd<br>Kepala Sekolah<br>Sekolah Dasar Kesamiran 01</p>
            </div>
        </div>
    </div>

    <div class="welcome-overlay">
        <h1 class="display-1 text-white"><span class="typing-text"></span></h1>
    </div>
@endsection
