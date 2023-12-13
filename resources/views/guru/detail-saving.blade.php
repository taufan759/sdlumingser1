@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-eye"></i> Detail Tabungan {{ $siswa->nama }} </p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                @if ($profil && $profil->first()->image)
                    <img src="{{ asset('storage/' . $profil->first()->image) }}" alt="" class="img-fluid rounded">
                @else
                    <!-- You can add a placeholder image or leave it empty -->
                   
                @endif
            </div>

            <!-- Right Side - Details -->
            <div class="col-md-8 mt-2">
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded">Informasi Akun {{ $siswa->nama }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA AKUN : </span>
                    <input disabled value="{{ $siswa->nama }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">EMAIL : </span>
                    <input disabled value="{{ $siswa->email }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIS : </span>
                    <input disabled value="{{ $siswa->NIS }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-success p-2 rounded">Informasi Profil {{ $siswa->nama }}</span></a>
                </div>
                @if ($profil)
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NAMA : </span>
                        <input disabled value="{{ $profil->nama_siswa }}" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIS : </span>
                        <input disabled value="{{ $profil->NIS }}" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">KELAS : </span>
                        <input disabled value="{{ $profil->kelas }}" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <a href="/guru/siswa/view/{{ $profil->id }}/={{ urlencode($profil->nama_siswa) }}"><span
                                class="badge text-bg-warning p-2 rounded">Lebih Detail Tentang {{ $profil->nama_siswa }} <i
                                    class="fa-solid fa-arrow-trend-up"></i></span></a>
                    </div>
                @else
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-danger p-2 rounded"><i class="fa-solid fa-triangle-exclamation"></i> {{ $siswa->nama }} Belum Melengkapi Datanya !!.</span></a>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-success">{{ $menabungCount }}</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="89"
                                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $menabungCount }}%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Menabung</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-danger">{{ $menarikCount }}</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="89"
                                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $menarikCount }}%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Menarik</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-auto">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left  card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-info">Rp. {{  number_format($siswa->saldo, 0, ',', ',')  }}</div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Saldo Sekarang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class=" mb-2">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" id="liveSearch" placeholder="Cari" class="form-control">
                </div>
            </div>
            <div class="table-responsive mb-5">
                <table class="table-borderless table-striped table-hover mb-0 table align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tgl Transaksi</th>
                            <th class="text-center">Nama Siswa</th>
                            <th class="text-center">Penulis</th>
                            <th class="text-center">Debet</th>
                            <th class="text-center">Kredit</th>
                            <th class="text-center">Saldo</th>
                            <th class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($saving as $saving)
                            <tr>
                                <td class="text-muted text-center">{{ $loop->iteration }}</td>
                                <td class="">{{ $saving->updated_at->format('d-m-Y (H:i)') }}</td>
                                @if ($profil && $profil->first()->nama_siswa)
                                  <td class="">{{ $profil->nama_siswa }}</td>
                                @else
                                  <td class="">{{ $saving->siswa->nama }}</td>
                                @endif

                                <td class="">{{ $saving->author->nama }}</td>
                                @if ($saving->jenis_transaksi == 1)
                                    <td class="text-success">Rp. {{  number_format($saving->saldo_transaksi, 0, ',', ',')  }}</td>
                                    <td class=""></td>
                                    @else
                                    <td class=""></td>
                                    <td class="text-danger">Rp. {{  number_format($saving->saldo_transaksi, 0, ',', ',')  }}</td>
                                @endif
                                <td class="">Rp. {{  number_format($saving->saldo_final, 0, ',', ',')  }} </td>
                                <td class="">{{ $saving->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
