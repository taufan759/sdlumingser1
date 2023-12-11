@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-eye"></i> Detail || {{ $detail->nama_siswa }} </p>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Side - Photo -->
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->nama_siswa }}" class="img-fluid rounded">
            </div>

            <!-- Right Side - Details -->
            <div class="col-md-8">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA : </span>
                    <input disabled value="{{ $detail->nama_siswa }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIM : </span>
                    <input disabled value="{{ $detail->NIS }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">TTGL : </span>
                    <input disabled value="{{ $detail->tempat_tanggal_lahir_siswa }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">KELAS : </span>
                    <input disabled value="{{ $detail->tempat_tanggal_lahir_siswa }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">JK : </span>
                    <input disabled value="{{ $detail->kelamin }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">ALAMAT : </span>
                    <input disabled value="{{ $detail->alamat_lengkap }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">IBU : </span>
                    <input disabled value="{{ $detail->nama_ibu }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">AYAH : </span>
                    <input disabled value="{{ $detail->nama_ayah }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded-0">Kartu Keluarga</span></a>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <img src="{{ asset('storage/' . $detail->foto_kk) }}" alt="{{ $detail->nama_siswa }}" class="img-fluid rounded">
        </div>
    </div>
@endsection
