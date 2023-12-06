@extends('layouts.default')

@section('content')
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('assets/img/Carousel.jpeg') }}" class="d-block w-100 object-fit-cover"
                        style="height: 80vh">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('assets/img/Carousel1.jpg') }}" class="d-block w-100 object-fit-cover"
                        style="height: 80vh">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" class="d-block w-100 object-fit-cover"
                        style="height: 80vh">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row text-center">
        <h1>Sambutan Kepala Sekolah</h1>
    </div>
    <div class="row">
        <div class="col">
            <img src="{{ asset('assets/img/kepsek.png') }}" class="card-img-top" alt="...">
        </div>
        <div class="col">
            <p>Selamat datang di situs web resmi SDN Kesamiran 01!</p>

            <p>Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas limpahan rahmat dan hidayah-Nya, sehingga kita
                dapat berkumpul di sini. Saya, Ali Rosidi, S.Pd, SD, sebagai Kepala Sekolah, dengan bangga menyambut Anda di
                lingkungan pendidikan yang penuh semangat dan dedikasi ini.</p>

            <p>SDN Kesamiran 01 bukan sekadar sebuah lembaga pendidikan, tetapi sebuah keluarga besar yang peduli terhadap
                perkembangan setiap anak didiknya.</p>

            <p>Di SDN Kesamiran 01, kami memandang pendidikan sebagai kunci utama untuk membentuk generasi penerus yang
                berkarakter, cerdas, dan berintegritas. Kami memiliki komitmen untuk memberikan pendidikan berkualitas,
                melibatkan siswa dalam proses pembelajaran yang kreatif, inovatif, dan berorientasi pada nilai-nilai
                kehidupan.</p>

            <p>Situs web ini hadir sebagai wadah informasi utama bagi orang tua, siswa, dan masyarakat umum. Kami berharap
                situs ini dapat menjadi sumber referensi yang bermanfaat, tidak hanya terkait dengan kegiatan sekolah,
                tetapi juga perkembangan terbaru dalam dunia pendidikan.</p>

            <p>Kami mengundang Anda untuk menjelajahi halaman-halaman situs ini, mengikuti perkembangan kegiatan sekolah,
                dan terlibat aktif dalam mendukung proses pembelajaran anak-anak kita. Keterlibatan dan dukungan Anda sangat
                berarti bagi kami dalam menciptakan lingkungan belajar yang optimal.</p>

            <p>Terima kasih atas kepercayaan dan dukungan Anda terhadap SDN Kesamiran 01. Mari kita bersama-sama membentuk
                generasi yang unggul, berbudi luhur, dan siap menghadapi tantangan masa depan.</p>

            <p>Salam Pendidikan,<br>Ali Rosidi, S.Pd, SD<br>Kepala Sekolah SDN Kesamiran 01</p>
        </div>
    </div>
@endsection
