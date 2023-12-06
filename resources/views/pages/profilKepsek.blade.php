@extends('layouts.default')

@section('content')
    @foreach ($kepsek as $k)
        <div class="row justify-content-center" style="padding-top: 100px">
            <div class="col-8">
                <div class="card rounded-4 shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/kepsek.png') }}" class="rounded-4 shadow-lg" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8">
                            <div class="card-block px-2 pt-3">
                                <h4 class="card-title">{{ $k->title }}</h4>
                                <p class="card-text">
                                    Nama : {{ $k->nama }}<br>
                                    Nip : {{ $k->nip }}<br>
                                    Alamat : {{ $k->alamat }}<br>
                                    No. Telp : {{ $k->no_tlp }}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
