@extends('layouts.default')

@section('content')
<div class="container py-5"> 
    <!-- Header Section -->
    <div class="text-center mb-5" style="padding-top: 50px;">
        <h1 class="title fw-bold" style="color: #333">Sambutan dan Profil Kepala Sekolah</h1>
        <div class="line-separator"></div>
        <p class="lead text-muted">Mengenal lebih dekat pemimpin SD Negeri Lumingser 01</p>
    </div>

    <!-- Bagian Sambutan Kepala Sekolah -->
    <div class="row justify-content-center align-items-center mb-5">
    <!-- Gambar Kepala Sekolah -->
    <div class="col-md-4 text-center">
        <img src="{{ asset('assets/img/fotokepsek.jpg') }}" 
            alt="Foto Kepala Sekolah" 
            class="img-fluid shadow" style="max-width: 100%; height: auto;">
    </div>

    <!-- Sambutan -->
    <div class="col-md-8">
        <section class="sambutan-section">
            
            <p class="sambutan-text">
                Saya, <strong>Kanapi, S.Pd.SD.</strong>, dengan bangga menyambut Anda di platform ini, sebuah media untuk berbagi informasi, pencapaian, serta momen berharga dari perjalanan pendidikan di SD Negeri Lumingser 01. Kehadiran Anda di sini adalah wujud dari dukungan dan kerja sama yang terus kita jalin.
            </p>
            <p class="sambutan-text">
                Di SD Negeri Lumingser 01, kami memandang setiap siswa sebagai individu dengan potensi luar biasa. Dengan dukungan tenaga pendidik yang berdedikasi dan kurikulum yang relevan, kami berkomitmen untuk menciptakan lingkungan belajar yang mendukung tumbuh kembang siswa baik secara akademik maupun karakter.
            </p>
            <p class="sambutan-text">
                Terima kasih atas perhatian dan kerja sama Anda. Mari kita bersama-sama mewujudkan pendidikan yang inspiratif dan bermakna bagi masa depan generasi penerus.
            </p>
            <p class="sambutan-footer text-end text-muted">Salam hormat,</p>
            <p class="sambutan-signature text-end fw-bold">
                Kanapi, S.Pd.SD.<br>
                Kepala Sekolah<br>
                SD Negeri Lumingser 01
            </p>
            
            
        </section>
    </div>
</div>
    <!-- Profil -->
    <section>
        <h2 class="text-center fw-bold" style="color: #333">Profil Kepala Sekolah</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nama:</strong> Kanapi, S.Pd.SD. </li>
            <li class="list-group-item"><strong>Jabatan:</strong> Kepala Sekolah </li>
            <li class="list-group-item"><strong>NIP:</strong> 197109192005011004 </li>
            <li class="list-group-item"><strong>Alamat:</strong> Adiwerna </li>
            <li class="list-group-item"><strong>Kontak:</strong> - </li>
        </ul>
    </section>
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
</div>
@endsection
