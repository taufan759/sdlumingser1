@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-eye"></i> Detail || {{ $detail->nama }} </p>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Side - Photo -->
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->nama }}" class="img-fluid rounded">
            </div>

            <!-- Right Side - Details -->
            <div class="col-md-8 mt-2">
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded">Akun {{ $detail->nama }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA AKUN : </span>
                    <input disabled value="{{ $detail->user->nama }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">EMAIL : </span>
                    <input disabled value="{{ $detail->user->email }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIP : </span>
                    <input disabled value="{{ $detail->user->NIP }}" type="text" class="form-control">
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
                    <a><span class="badge text-bg-warning p-2 rounded">Identitas {{ $detail->nama }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="badge text-bg-success p-2 rounded" id="inputGroup-sizing-sm">{{ $detail->title }} </span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA : </span>
                    <input disabled value="{{ $detail->nama }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIP : </span>
                    <input disabled value="{{ $detail->NIP }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Staff : </span>
                    @php
                    switch ($detail->roles) {
                        case 1:
                            $roleText = 'Kepala Sekolah';
                            break;
                        case 2:
                            $roleText = 'Guru';
                            break;
                        case 3:
                            $roleText = 'Staff Admin';
                            break;
                        default:
                            $roleText = 'Unknown Role';
                    }
                @endphp
                    <input disabled value="{{ $roleText }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">JABATAN : </span>
                    <input disabled value="{{ $detail->jabatan }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">ALAMAT : </span>
                    <input disabled value="{{ $detail->alamat }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NO TLP : </span>
                    <input disabled value="{{ $detail->no_tlp }}" type="text" class="form-control">
                </div>
            </div>
        </div>
       
    </div>
@endsection
