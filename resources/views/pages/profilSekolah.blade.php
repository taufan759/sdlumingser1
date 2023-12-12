@extends('layouts.default')

@section('content')
    <div class="row" style="padding-top: 75px;">
        <div data-aos="fade-up" class="col text-center">
            <h1>Profil Sekolah</h1>
            <h2>SD Negeri Kesamiran 01</h2>
        </div>
    </div>
    <div class="row" style="padding-inline: 50px">
        <div class="col p-5 pt-3">
            <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                <div class="card-body" id="vm">
                    <div class="card-title">
                        <h3 class="fw-medium text-center">Visi :</h3>
                    </div>
                    <div class="card-text text-center" id="visi">
                        <p class="lead">
                            "Tercetaknya lulusan yang berprestasi dalam pembelajaran dan memiliki kecakapan hidup yang
                            berwawasan
                            global.beriman dan Bertaqwa, serta unggul dalam Kepribadian, dan Mandiri”
                        </p>
                    </div>
                    <div class="card-title">
                        <h3 class="fw-medium text-center">Misi :</h3>
                    </div>
                    <div class="card-text" id="misi">
                        <ul>
                            <li class="lead">Melaksanakan pembelajaran dengan mengoptimalkan Pembelajaran Aktif, Inovatif,
                                Kreatif,
                                Efektif dan
                                Menyenangkan (PAIKEM) dan tematik, pembiasaan bidang keagamaan, budi pekerti, dan hidup
                                sehat.</li>
                            <li class="lead">Mengembangkan pengetahuan, kecapakan hidup, prestasi dan kepribadian siswa
                                melalui kegiatan
                                kurikuler,
                                ekstrakurikuler, serta bimbingan</li>
                            <li class="lead">Menerapkan dan mengembangkan manajemen partisipatif.</li>
                            <li class="lead">Melakukan pembimbingan dan pelatihan untuk pengembangan minat dan bakat
                                secara terencana dan
                                terarah.
                            </li>
                            <li class="lead">Menyelenggarakan berbagai even kompetisi untuk memfasilitasi pengembangan
                                kompetensi siswa
                                sesuai minat
                                dan bakat peserta didik.</li>
                            <li class="lead">Melaksanakan berbagai pembiasaan bagi seluruh warga sekolah, dalam rangka
                                pembentukan sikap
                                dan perilaku
                                untuk menguatkan profil pelajar Pancasila.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-inline: 50px">
        <div class="col p-5 pt-3">
            <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                <div class="card-body" id="pg">
                    <div class="card-title">
                        <h3 class="fw-medium pb-2 text-center">Profil Geografis :</h3>
                    </div>
                    <div class="card-text">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card rounded-3">
                                    <iframe class="rounded-3"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.702651612595!2d109.20762637445968!3d-6.926102493073644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc72b89bbe8c9%3A0x3a628f4a23460c07!2sSD%20NEGERI%20KESAMIRAN%2001!5e0!3m2!1sid!2sid!4v1701753633234!5m2!1sid!2sid"
                                        width="auto" height="500px" style="border:1;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-md-0 pt-3">
                                <div class="card rounded-3">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
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
                                            <table class="table-striped table">
                                                <tr>
                                                    <th>Nama Sekolah</th>
                                                    <td>:</td>
                                                    <td>SDN Kesamiran 01</td>
                                                </tr>
                                                <tr>
                                                    <th>N.S.S</th>
                                                    <td>:</td>
                                                    <td>1010328150008</td>
                                                </tr>
                                                <tr>
                                                    <th>N.P.S.N</th>
                                                    <td>:</td>
                                                    <td>20325223</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>:</td>
                                                    <td>Jl. Wanabhakti II, Desa Kesamiran, Kecamatan Tarub, Kabupaten Tegal,
                                                        Provinsi Jawa Tengah, Indonesia.</td>
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
                                                    <td>1 Km</td>
                                                </tr>
                                                <tr>
                                                    <th>Jarak ke Kabupaten</th>
                                                    <td>:</td>
                                                    <td>6 Km</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-dokumen" role="tabpanel"
                                            aria-labelledby="nav-dokumen-tab" tabindex="0">
                                            <table class="table-striped table">
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
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal SK. Pendirian</th>
                                                    <td>:</td>
                                                    <td>01-08-1985</td>
                                                </tr>
                                                <tr>
                                                    <th>Nomor SK Operasional</th>
                                                    <td>:</td>
                                                    <td>421.2/025/ /39/1985</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal SK Operasional</th>
                                                    <td>:</td>
                                                    <td>01-08-1985</td>
                                                </tr>
                                                <tr>
                                                    <th>File SK Operasional</th>
                                                    <td>:</td>
                                                    <td><a
                                                            href="https://vervalsp.data.kemdikbud.go.id/verval/dokumen/skoperasional/816643-412872-132643-83306457-1902083528.pdf">Lihat
                                                            SK Operasional</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Upload SK Op.</th>
                                                    <td>:</td>
                                                    <td>2023-04-19 03:56:30.160</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab" tabindex="0">
                                            <table class="table-striped table">
                                                <tr>
                                                    <th>Lintang</th>
                                                    <td>:</td>
                                                    <td>-6.9261025</td>
                                                </tr>
                                                <tr>
                                                    <th>Bujur</th>
                                                    <td>:</td>
                                                    <td>109.2076264</td>
                                                </tr>
                                                <tr>
                                                    <th>Luas Tanah</th>
                                                    <td>:</td>
                                                    <td>2.800 m2</td>
                                                </tr>
                                                <tr>
                                                    <th>Akses Internet</th>
                                                    <td>:</td>
                                                    <td>50 Mb</td>
                                                </tr>
                                                <tr>
                                                    <th>Sumber Listrik</th>
                                                    <td>:</td>
                                                    <td>PLN</td>
                                                </tr>
                                                <tr>
                                                    <th>Daya Listrik</th>
                                                    <td>:</td>
                                                    <td>1300 W</td>
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
                                                    <td>sdnkesamiran01@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Website</th>
                                                    <td>:</td>
                                                    <td><a href="/">sdnkesamiran01.sch.id</a></td>
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
