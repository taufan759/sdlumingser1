@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Daftarkan Data Siswa Lengkap</p>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info widget-chart widget-chart2 card mb-3 text-left">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left fsize-1 pr-2">
                            <div class="widget-numbers fsize-3 text-info mt-0">{{ $siswa->count() }}</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                    aria-valuemax="100" style="width: {{ $siswa->count() }}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Totals Siswa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Akun" class="form-control">
        </div>
    </div>
    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Profil</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">TTGL</th>
                    <th class="text-center">Kelamin</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswa)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>

                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle"
                                                src="{{ asset('storage/' . $siswa->image) }}" alt="Profil Siswa">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">{{ $siswa->nama_siswa }}</td>
                        <td class="text-center">
                            <div class="badge badge-success">{{ $siswa->NIS }}</div>
                        </td>
                        <td class="text-center">
                            {{ $siswa->tempat_tanggal_lahir_siswa }}
                        </td>
                        <td class="text-center">
                            {{ $siswa->kelamin }}
                        </td>
                        <td class="text-center">
                            {{ $siswa->kelas }}
                        </td>
                        <td class="text-center">
                            <a href="/guru/siswa/view/{{ $siswa->id }}/={{ urlencode($siswa->nama_siswa) }}"
                                id="PopoverCustomT-2" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <button type="button" id="PopoverCustomT-2" class="btn btn-info btn-sm"><i
                                    class="fa-solid fa-user-pen"></i></button>
                            <button type="button" id="PopoverCustomT-2" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
