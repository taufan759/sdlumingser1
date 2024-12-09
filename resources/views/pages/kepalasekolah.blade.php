@extends('layouts.default')

@section('content')
<div class="row" style="padding-top: 75px;">
  <div data-aos="fade-up" class="col text-center">
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
@endsection