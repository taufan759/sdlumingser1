@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-circle-dollar-to-slot"></i> Tambahkan Tabungan Siswa</p>
    <div class="col-md-6 col-lg-5">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">Rp. {{ number_format($sumSaldo, 0, ',', ',') }}
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Totals Seluruh Saldo Siswa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ url('/guru/saving') }}">
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

        <div class="row mb-3">
            <label for="users_siswa" class="col-sm-2 col-form-label">{{ __('Siswa') }}</label>
            <div class="col-sm-10">
                <select id="users_siswa" class="form-control @error('users_siswa') is-invalid @enderror" name="users_siswa" required>
                    <option value="" selected>--- pilih siswa ---</option>
                    @foreach ($siswa as $user)
                        <option value="{{ $user->id }}" {{ old('users_siswa') == $user->id ? 'selected' : '' }}>
                            {{ $user->nama }}
                        </option>
                    @endforeach
                </select>
                @error('users_siswa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">{{ __('Jenis Transaksi') }}</label>
            <div class="col-sm-10">
                <select id="jenis_transaksi" class="form-control @error('jenis_transaksi') is-invalid @enderror" name="jenis_transaksi" required autofocus>
                    <option value="" selected disabled>{{ __('Select Jenis Transaksi') }}</option>
                    <option value="1" {{ old('jenis_transaksi') == '1' ? 'selected' : '' }}>Menabung</option>
                    <option value="2" {{ old('jenis_transaksi') == '2' ? 'selected' : '' }}>Menarik</option>
                </select>
                @error('jenis_transaksi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 input-group input-group-sm ">
               <span class="mr-3 ">Saldo Transaksi</span>
                <span style="margin-left: 34px" class="input-group-text rounded-left bg-primary text-white" id="inputGroup-sizing-sm">Rp. </span>
                <input id="saldo_transaksi" type="text" class="form-control @error('saldo_transaksi') is-invalid @enderror"
                    name="saldo_transaksi" autocomplete="new-saldo_transaksi">
                @error('saldo_transaksi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
            <div class="col-sm-10">
                <textarea  rows="3" id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                    value="{{ old('keterangan') }}" autocomplete="keterangan" autofocus>
                </textarea>
                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Tambah') }}
                </button>
            </div>
        </div>
    </form>
    <div class=" mb-2">
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
                    <th>Nama Siswa</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Dibuat</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($saving as $saving)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $saving->siswa->nama }}</td>
                        <td class="text-center">
                            <div class="badge badge-success">{{ $saving->siswa->NIS }}</div>
                        </td>
                        <td class="text-center">{{ $saving->updated_at->diffForHumans() }}</td>
                        <td class="text-center">
                            <a href="/guru/siswa/saving/{{ $saving->id }}/={{ urlencode($saving->siswa->nama) }}"
                                id="PopoverCustomT-2" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
