@extends('layouts.default')

@section('content')
<div class="container" style="margin-top: 75px; margin-bottom: 75px;">
    <div class="row">
        <div data-aos="fade-up" class="col text-center">
            <h1 class="title">Visi & Misi</h1>
            <div class="line-separator mx-auto"></div>
            <h2 class="subtitle">SDN Lumingser 01</h2>
        </div>
    </div>
    <!-- Visi and Misi Section -->
    <div class="row mb-5">
        <div class="col p-4">
            <div data-aos="fade-up" class="card border-0 rounded-4 shadow-sm">
                <div class="card-body p-4 p-md-5 bg-light">
                    <!-- Visi -->
                    <div class="mb-5">
                        <h3 class="fw-bold text-center text-primary mb-3">Visi</h3>
                        <p class="lead text-center fst-italic mb-0 text-dark">
                            "TERWUJUDNYA PESERTA DIDIK YANG BERIMAN DAN BERTAQWA, CERDAS, TERAMPIL, MANDIRI, BERBUDAYA DAN BERWAWASAN GLOBAL”
                        </p>
                    </div>
                    <hr class="my-4">
                    <!-- Misi -->
                    <div>
                        <h3 class="fw-bold text-center text-primary mb-3">Misi</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item lead text-dark">
                                Menyelenggarakan pembelajaran berkualitas untuk peserta didik.
                            </li>
                            <li class="list-group-item lead text-dark">
                                Menyelenggarakan berbagai kegiatan keagamaan sebagai media pembelajaran peserta didik untuk pendalaman implementasi nilai-nilai keagamaan
                            </li>
                            <li class="list-group-item lead text-dark">
                                Mengembangkan bidang ilmu pengetahuan dan teknologi berdasarkan minat, bakat, dan potensi peserta didik.
                            </li>
                            <li class="list-group-item lead text-dark">
                                Menyelenggarakan berbagai even kompetisi untuk memfasilitasi pengembangan kompetensi siswa sesuai minat dan bakat peserta didik.
                            </li>
                            <li class="list-group-item lead text-dark">
                                Menyelenggarakan berbagai even kompetisi untuk memfasilitasi pengembangan kompetensi siswa sesuai minat dan bakat peserta didik.
                            </li>
                            <li class="list-group-item lead text-dark">
                                Melaksanakan berbagai pembiasaan bagi seluruh warga sekolah, dalam rangka pembentukan sikap dan perilaku untuk menguatkan profil pelajar Pancasila.
                            </li>
                            <li class="list-group-item lead text-dark">
                                <li class="list-group-item lead text-dark">
                                    Melaksanakan berbagai pembiasaan bagi seluruh warga sekolah, dalam rangka pembentukan sikap dan perilaku untuk menguatkan profil pelajar Pancasila.
                                </li>
                            </li>
                            <li class="list-group-item lead text-dark">
                                7.	Melakukan transformasi konsep globalisasi dalam berbagai lingkup.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nilai-Nilai Section -->
    <div class="row">
        <div class="col p-4">
            <div data-aos="fade-up" class="card border-0 rounded-4 shadow-sm">
                <div class="card-body p-4 p-md-5 bg-light">
                    <h3 class="fw-bold text-center text-primary mb-4">Nilai-Nilai</h3>
                    <p class="lead text-center mb-4 text-dark">
                        <strong>Beriman, bertaqwa kepada Tuhan yang Maha Esa (YMW), dan Berakhlak mulia</strong><br>
                        Berkebinekaan Global<br>
                        Bergotong Royong<br>
                        Mandiri<br>
                        Bernalar Kritis<br>
                        Kreatif
                    </p>
                    <hr class="my-4">
                    <h3 class="fw-bold text-center text-primary mb-4">Filosofi Pendidikan</h3>
                    <p class="lead text-justify text-dark">
                        Profil Pelajar Pancasila dibangun melalui berbagai aspek dalam kehidupan sehari-hari pelajar, termasuk budaya sekolah, pembelajaran intrakurikuler, kokurikuler, dan ekstrakurikuler. Dalam budaya sekolah, enam dimensi profil ini diintegrasikan dalam iklim sekolah, kebijakan, pola interaksi, dan norma yang berlaku. Sedangkan, dalam pembelajaran intrakurikuler, capaian pembelajaran dan tujuan pembelajaran sudah mencakup elemen-elemen profil ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.line-separator {
    width: 60px;
    height: 3px;
    background-color: #007BFF; 
    margin: 10px auto 15px;
}
.subtitle {
    font-size: calc(1.325rem + .9vw);
    color: #333;
    font-style: normal;
}
</style>
@endsection
