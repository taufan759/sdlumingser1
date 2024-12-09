@extends('layouts.default')

@section('content')
<div class="container" style="margin-top: 75px; margin-bottom: 75px;">
    <div class="row">
        <div data-aos="fade-up" class="col text-center">
            <h1 class="gallery-title">Data Pokok Sekolah</h1>
            <div class="line-separator mx-auto"></div>
            <h2 class="gallery-subtitle">SDN Lumingser 01</h2>
        </div>
    </div>
    <div class="row">
        <div class="col p-5 pt-2 pt-md-3">
            <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                <div class="card-body p-4 p-md-5" id="pg">
                    <div class="card-title">
                        <h3 class="fw-medium pb-2 text-center">Data Pokok sekolah :</h3>
                    </div>
                    <div class="card-text">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card rounded-3">
                                    <iframe class="rounded-3"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.660480604865!2d109.09440117410688!3d-6.931122667843353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbbdf15555555%3A0xb186d903a2e049db!2sSD%20N.%20Lumingser%2001!5e0!3m2!1sid!2sid!4v1732870992012!5m2!1sid!2sid" 
                                        width="auto" height="500" style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-md-0 pt-3">
                                <div class="card rounded-3">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-identitas-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-identitas" type="button" role="tab"
                                                aria-controls="nav-identitas" aria-selected="true">Identitas</button>
                                            <button class="nav-link" id="nav-dokumen-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-dokumen" type="button" role="tab"
                                                aria-controls="nav-dokumen" aria-selected="false">Dokumen &
                                                Perizinan</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-contact" type="button" role="tab"
                                                aria-controls="nav-contact" aria-selected="false">Lain-Lain</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-identitas" role="tabpanel"
                                            aria-labelledby="nav-identitas-tab" tabindex="0">
                                            <table class="table-borderless table">
                                                <tr>
                                                    <th>Nama Sekolah</th>
                                                    <td>:</td>
                                                    <td>SD NEGERI LUMINGSER 01</td>
                                                </tr>
                                                <tr>
                                                    <th>N.S.S</th>
                                                    <td>:</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>N.P.S.N</th>
                                                    <td>:</td>
                                                    <td>20325178</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>:</td>
                                                    <td>Jl. Kemiri Raya No.Rt 3/1, Kedawung, Lumingser, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</td>
                                                </tr>
                                                <tr>
                                                    <th>Daerah</th>
                                                    <td>:</td>
                                                    <td>Pedesaan</td>
                                                </tr>
                                                <tr>
                                                    <th>Status Sekolah</th>
                                                    <td>:</td>
                                                    <td>Negeri</td>
                                                </tr>
                                                <tr>
                                                    <th>Akreditasi</th>
                                                    <td>:</td>
                                                    <td>B</td>
                                                </tr>
                                                <tr>
                                                    <th>Kelompok Sekolah</th>
                                                    <td>:</td>
                                                    <td>Inti</td>
                                                </tr>
                                                <tr>
                                                    <th>KBM</th>
                                                    <td>:</td>
                                                    <td>Pagi</td>
                                                </tr>
                                                <tr>
                                                    <th>Bangunan Sekolah</th>
                                                    <td>:</td>
                                                    <td>Milik Sendiri</td>
                                                </tr>
                                                <tr>
                                                    <th>Jarak ke Kecamatan</th>
                                                    <td>:</td>
                                                    <td>5 Km</td>
                                                </tr>
                                                <tr>
                                                    <th>Jarak ke Kabupaten</th>
                                                    <td>:</td>
                                                    <td>10 Km</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-dokumen" role="tabpanel"
                                            aria-labelledby="nav-dokumen-tab" tabindex="0">
                                            <table class="table-borderless table">
                                                <tr>
                                                    <th>Kementerian Pembina</th>
                                                    <td>:</td>
                                                    <td>Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi</td>
                                                </tr>
                                                <tr>
                                                    <th>Naungan</th>
                                                    <td>:</td>
                                                    <td>Pemerintah Daerah</td>
                                                </tr>
                                                <tr>
                                                    <th>NPYP</th>
                                                    <td>:</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>No. SK. Pendirian</th>
                                                    <td>:</td>
                                                    <td>No. 421.2/025/ /56/85</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal SK. Pendirian</th>
                                                    <td>:</td>
                                                    <td>01-08-1985</td>
                                                </tr>
                                                <tr>
                                                    <th>Nomor SK Operasional</th>
                                                    <td>:</td>
                                                    <td>NO. 421.2/025/ /56/85</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal SK Operasional</th>
                                                    <td>:</td>
                                                    <td>01-08-1985</td>
                                                </tr>
                                                <tr>
                                                    <th>File SK Operasional</th>
                                                    <td>:</td>
                                                    <td>
                                                        -
                                                        {{-- <a href="https://vervalsp.data.kemdikbud.go.id/verval/dokumen/skoperasional/816643-412872-132643-83306457-1902083528.pdf">
                                                            Lihat SK Operasional
                                                        </a> --}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Upload SK Op.</th>
                                                    <td>:</td>
                                                    <td>-</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab" tabindex="0">
                                            <table class="table-borderless table">
                                                <tr>
                                                    <th>Lintang</th>
                                                    <td>:</td>
                                                    <td>-6.930900000000</td>
                                                </tr>
                                                <tr>
                                                    <th>Bujur</th>
                                                    <td>:</td>
                                                    <td>109.096300000000</td>
                                                </tr>
                                                <tr>
                                                    <th>Luas Tanah</th>
                                                    <td>:</td>
                                                    <td>1.670 m2</td>
                                                </tr>
                                                <tr>
                                                    <th>Akses Internet</th>
                                                    <td>:</td>
                                                    <td>20 Mbps</td>
                                                </tr>
                                                <tr>
                                                    <th>Sumber Listrik</th>
                                                    <td>:</td>
                                                    <td>PLN</td>
                                                </tr>
                                                <tr>
                                                    <th>Daya Listrik</th>
                                                    <td>:</td>
                                                    <td>1200 W</td>
                                                </tr>
                                                <tr>
                                                    <th>Fax</th>
                                                    <td>:</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Telepon</th>
                                                    <td>:</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>:</td>
                                                    <td>sdnlumingser01@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Website</th>
                                                    <td>:</td>
                                                    <td>
                                                        -
                                                        {{-- <a href="/">sdnkesamiran01.sch.id</a> --}}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection