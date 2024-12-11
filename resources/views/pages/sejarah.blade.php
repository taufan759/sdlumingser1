@extends('layouts.default')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mb-5" style="padding-top: 50px;">
        <h1 class="title fw-bold" style="color: #333;">Profil SD Negeri Lumingser 01</h1>
        <div class="line-separator"></div>
        <p class="lead text-muted">Mengenal lebih dekat SD Negeri Lumingser 01</p>
    </div>

    <!-- Sejarah Sekolah dengan teks di sebelah kanan gambar -->
    <section class="history-section mb-5">
        <div class="row justify-content-center align-items-center">
            <!-- Gambar Sekolah di sebelah kiri -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/Sejarah.jpg') }}" 
                        class="img-fluid shadow-lg rounded-4" 
                        style="object-fit: cover; width: 100%; border-radius: 30px;" 
                        alt="Gambar Sekolah">
                </div>
            </div>
    
            <!-- Teks Sejarah di sebelah kanan -->
            <div class="col-md-6">
                <p class="text-justify fs-5">
                    SD Negeri Lumingser 01 terletak di Desa Lumingser, Kecamatan Lumingser, Kabupaten Tegal, di tengah masyarakat agraris yang religius dan memiliki tradisi gotong royong yang kuat.
                </p>
                <p class="text-justify fs-5">
                    Sebagian besar siswa berasal dari keluarga buruh tani, pedagang, dan pegawai, menciptakan keberagaman latar belakang yang memperkaya proses pembelajaran.
                </p>
                <p class="text-justify fs-5">
                    Sekolah ini memiliki 9 guru berkompeten, 3 tenaga kependidikan, dan fasilitas yang memadai, termasuk 6 ruang kelas, perpustakaan, serta alat peraga pembelajaran.
                </p>
                <p class="text-justify fs-5">
                    Pembelajaran yang diterapkan bersifat kolaboratif, mendukung siswa dengan berbagai latar belakang untuk berkembang secara maksimal.
                </p>
            </div>
        </div>
    
        <!-- Dua Paragraf Teks yang Diperlukan untuk Pindah ke Bawah -->
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-justify fs-5">
                    Sekolah ini dengan bangga menjunjung tinggi nilai kebhinekaan yang tercermin dalam berbagai aktivitas dan budaya lokal yang ada, salah satunya adalah seni hadroh. Seni hadroh ini tidak hanya menjadi bagian dari tradisi budaya yang hidup di masyarakat sekitar, tetapi juga menjadi sarana penting dalam penguatan karakter Profil Pelajar Pancasila. Melalui seni hadroh, siswa-siswa di SD Negeri Lumingser 01 diajarkan untuk menghargai keberagaman, bekerja sama dalam kelompok, serta memperkuat rasa kebersamaan. Selain itu, seni ini juga mengajarkan nilai-nilai ketekunan dan kedisiplinan, yang sangat penting dalam membentuk karakter yang baik bagi generasi muda.
                </p>
                <p class="text-justify fs-5">
                    Selain itu, sekolah ini sangat menyadari pentingnya komunikasi yang terbuka dan baik antara pihak sekolah dan orang tua. Sebagai mitra dalam pendidikan, hubungan yang erat antara kedua belah pihak sangat berpengaruh terhadap perkembangan siswa. SD Negeri Lumingser 01 tidak hanya berfokus pada pengajaran di dalam kelas, tetapi juga aktif melibatkan orang tua dalam berbagai kegiatan yang diadakan oleh sekolah, seperti pertemuan orang tua dan kegiatan pengajaran bersama. Komunikasi yang baik ini membantu memastikan bahwa setiap kebutuhan dan harapan orang tua terhadap pendidikan anak-anak mereka dapat dipahami dengan baik, serta memastikan bahwa program pendidikan yang diterapkan di sekolah selaras dengan tujuan yang ingin dicapai bersama. Dengan komitmen kuat dari sekolah, guru, orang tua, dan seluruh pihak terkait, SD Negeri Lumingser 01 terus berupaya untuk menyediakan pendidikan berkualitas yang dapat membawa manfaat besar bagi masyarakat setempat dan mempersiapkan generasi penerus yang cerdas, berkarakter, dan siap menghadapi tantangan masa depan.
                </p>
            </div>
        </div>
    </section>
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

    /* Mengatur posisi gambar di layar besar */
    .col-lg-6.order-lg-2.order-1 .position-relative {
        position: relative;
        top: -50px; /* Mengatur gambar bergerak ke atas */
    }

    /* Untuk menambahkan jarak antara gambar dan teks */
    .history-section img {
        width: 100%;
        border-radius: 30px;
    }

    /* Agar dua paragraf berada di bawah gambar */
    .row.mt-4 {
        margin-top: 40px;
    }

    .text-justify, .fs-5 {
        color: #333;
    }

    /* Media query untuk mobile */
    @media (max-width: 768px) {
        .col-lg-6.order-lg-2.order-1 .position-relative {
            top: 0; /* Mengatur posisi gambar kembali ke posisi normal di mobile */
        }

        .history-section img {
            margin-top: 20px; /* Menambahkan jarak antara gambar dan teks di mobile */
        }

        /* Mengatur margin untuk memastikan teks tidak tertutup */
        .row.mt-4 {
            margin-top: 20px;
        }

        .col-md-6 {
            margin-top: 20px; /* Memberi jarak antara gambar dan teks */
        }
    }
</style>
@endsection