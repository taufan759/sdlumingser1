@extends('layouts.dashboardLayout')

@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-book"></i> Tambahkan Tugas Siswa</p>

    <div class="col-md-6 col-lg-5">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">{{ $totalTugas }} Tugas</div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Total Seluruh Tugas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('guru.tugas.store') }}" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="form-group">
            <label for="kelas">Pilih Kelas</label>
            <select name="kelas" id="kelas" class="form-control" required>
                @foreach ($kelas as $k)
                    <option value="{{ $k->kelas }}">{{ strtoupper($k->kelas) }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="judul_tugas">Judul Tugas</label>
            <input type="text" name="judul_tugas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_tugas">Deskripsi</label>
            <textarea name="deskripsi_tugas" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" name="deadline" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto">Lampiran Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <label for="file_url">Lampiran File</label>
            <input type="file" name="file_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <div class="mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Tugas" class="form-control">
        </div>
    </div>

    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Kelas</th>
                    <th class="text-center">Judul Tugas</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Deadline</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tugas as $item)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ strtoupper($item->kelas) }}</td>
                        <td class="text-center">{{ $item->judul_tugas }}</td>
                        <td class="text-center">{{ $item->deskripsi_tugas }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('guru.tugas.detail', $item->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
