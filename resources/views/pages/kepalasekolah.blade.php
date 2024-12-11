@extends('layouts.default')

@section('content')
<div class="container py-5"> 
    <!-- Header Section -->
    <div class="text-center mb-5" style="padding-top: 75px;">
        <h1 class="display-5 fw-bold" style="color: #5b5b5b">Sambutan dan Profil Kepala Sekolah</h1>
        <div class="header-with-lines">
            <div class="line black"></div>
            <div class="line blue"></div>
            <div class="line black"></div>
        </div>
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
            Saya, <strong>Kanapi, S.Pd SD</strong>, dengan bangga menyambut Anda di platform ini, sebuah media untuk berbagi informasi, pencapaian, serta momen berharga dari perjalanan pendidikan di SD Negeri Lumingser 01. Kehadiran Anda di sini adalah wujud dari dukungan dan kerja sama yang terus kita jalin.
        </p>
        <p class="sambutan-text">
            Di SD Negeri Lumingser 01, kami memandang setiap siswa sebagai individu dengan potensi luar biasa. Dengan dukungan tenaga pendidik yang berdedikasi dan kurikulum yang relevan, kami berkomitmen untuk menciptakan lingkungan belajar yang mendukung tumbuh kembang siswa baik secara akademik maupun karakter.
        </p>
        <p class="sambutan-text">
            Terima kasih atas perhatian dan kerja sama Anda. Mari kita bersama-sama mewujudkan pendidikan yang inspiratif dan bermakna bagi masa depan generasi penerus.
        </p>
        <p class="sambutan-footer text-end text-muted">Salam hormat,</p>
        <p class="sambutan-signature text-end fw-bold">
            Kanapi, S.Pd SD<br>
            Kepala Sekolah<br>
            SD Negeri Lumingser 01
        </p>
        
        
    </section>
</div>
</div>


    <!-- Profil -->
    <section>
        <h2 class="text-center fw-bold" style="color: #5b5b5b">Profil Kepala Sekolah</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Nama:</strong> Kanapi, S.Pd SD</li>
            <li class="list-group-item"><strong>Jabatan:</strong> Kepala Sekolah</li>
            <li class="list-group-item"><strong>NIP:</strong> 1234567890</li>
            <li class="list-group-item"><strong>Alamat:</strong> Jl. Pendidikan No. 5, Kota Tegal</li>
            <li class="list-group-item"><strong>Kontak:</strong> 0812 3456 7890</li>
        </ul>
    </section>
</div>
@endsection