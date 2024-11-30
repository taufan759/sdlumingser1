@extends('layouts.default')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="jumbotron carousel slide mb-4" data-bs-ride="carousel">
            <div class="jumbotron carousel-inner">
                <div class="carousel-item active rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Selamat Datang di Sekolah Dasar Kami</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Mendidik Generasi Unggul untuk Masa Depan Cerah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Belajar dan Bermain</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Menjalani Hari-Hari Menyenangkan di Sekolah.</p>
                    </div>
                </div>
                <div class="carousel-item rounded-4" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/Carousel.jpg') }}" class="d-block w-100 object-fit-cover rounded-4" style="height: 80vh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Kreativitas Tanpa Batas</h5>
                        <p style="color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Mengembangkan Bakat dan Potensi Anak Sejak Dini.</p>
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

        <div class="row py-4 text-center">
            <h1 class="display-6">Sambutan Kepala Sekolah</h1>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <img src="{{ asset('assets/img/kepsek_kartun.png') }}" alt="" class="img-fluid mb-3">
            </div>
            <div class="col-12 col-lg-8" id="sambutan">
                <h2>Selamat Datang di Laman Web Resmi <br>SD Negeri Lumingser 01!</h2>
            
                <p class="lead">Saya, Nama Guru, dengan bangga menyambut Anda di platform ini. Tempat di mana kita dapat berbagi informasi, pencapaian, dan momen-momen berharga dari kehidupan sekolah kami.</p>
            
                <p>Di SD Lumingser 01, kami memandang setiap siswa sebagai bintang yang berpotensi cemerlang. Dengan staf pengajar yang berdedikasi dan kurikulum yang terkini, kami berkomitmen untuk memberikan pendidikan berkualitas. Pendidikan ini tidak hanya melibatkan siswa dalam pembelajaran akademis, tetapi juga mendukung perkembangan karakter dan keterampilan sosial mereka.</p>
            
                <p>Melalui laman web ini, kami berharap dapat memberikan akses yang mudah bagi orang tua, siswa, dan masyarakat. Kami ingin semua pihak dapat mengikuti berbagai kegiatan sekolah, mendapatkan informasi terkini, serta terlibat aktif dalam pembentukan masa depan generasi muda kami.</p>
            
                <p>Terima kasih atas dukungan Anda. Mari bersama-sama menciptakan lingkungan belajar yang positif dan inspiratif.</p>
            
                <p class="font-italic">Salam hormat,</p>
            
                <p class="font-weight-bold">Nama Guru<br>Jabatan<br>Sekolah Dasar Lumingser 01</p>
            </div>
        </div>
    </div>

    <div class="welcome-overlay">
        <h1 class="display-1 text-white"><span class="typing-text"></span></h1>
    </div>
@endsection
