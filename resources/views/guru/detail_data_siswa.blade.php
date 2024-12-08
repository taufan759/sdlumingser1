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
            <div class="col-md-8 mt-2">
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded">Informasi Akun {{ $detail->nama_siswa }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA AKUN : </span>
                    <input disabled value="{{ $detail->user->nama }}" type="text" class="form-control">
                </div>
                {{-- <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">EMAIL : </span>
                    <input disabled value="{{ $detail->user->email }}" type="text" class="form-control">
                </div> --}}
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIS : </span>
                    <input disabled value="{{ $detail->user->NIS }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Roles : </span>
                    @php
                        switch ($detail->user->roles) {
                            case 1:
                                $roleText = 'Kepala Sekolah';
                                break;
                            case 2:
                                $roleText = 'Guru';
                                break;
                            case 3:
                                $roleText = 'Siswa';
                                break;
                            default:
                                $roleText = 'Unknown Role';
                        }
                    @endphp
                    <input disabled value="{{ $roleText }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded">Identitas {{ $detail->nama_siswa }}</span></a>
                </div>
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
                    <input disabled value="{{ $detail->kelas }}" type="text" class="form-control">
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
                    <a><span class="badge text-bg-warning p-2 rounded">Kartu Keluarga</span></a>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <img src="{{ asset('storage/' . $detail->foto_kk) }}" alt="{{ $detail->nama_siswa }}" class="img-fluid rounded">
        </div>
    </div>
@endsection
