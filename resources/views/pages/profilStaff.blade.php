@extends('layouts.default')

@section('content')
    <div class="row" style="padding-top: 100px">
        <div data-aos="fade-up" class="col text-center">
            <h1>Profil Kepala Sekolah, Guru dan Staff</h1>
            <h2>SD Negeri Kesamiran 01</h2>
        </div>
    </div>
    <div class="row">
        @foreach ($kepsek as $kepsek)
        <div class="col p-5 pt-3">
            <div data-aos="fade-up" class="card rounded-4 mx-auto text-center shadow-lg" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="fw-medium">{{$kepsek->title}}</h3>
                    </div>
                    <img src="{{ asset('storage/'.$kepsek->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$kepsek->nama}}</h5>
                        <p class="card-text text-start text-black">Jabatan : {{$kepsek->jabatan}} <br>
                        <span> NIP : {{$kepsek->NIP}}</span>
                        </p>
                        <a href="https://wa.me/{{$kepsek->no_tlp}}" class="btn">Kontak Saya</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <!-- Guru 1 -->
            @foreach ($guru as $guru)
            <div class="col-6 col-md-3 mb-4">
                <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h3 class="fw-medium">{{$guru->title}}</h3>
                        </div>
                        <img src="{{ asset('storage/'.$guru->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$guru->nama}}</h5>
                            <p class="card-text text-start text-black">Jabatan : {{$guru->jabatan}} <br>
                            <span> NIP : {{$guru->NIP}}</span>
                            </p>
                            <a href="https://wa.me/{{$guru->no_tlp}}" class="btn">Kontak Saya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Staff 1 -->
            @foreach ($staff as $staff)
            <div class="col-6 col-md-3 offset-md-3 mb-4">
                <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h3 class="fw-medium">{{$staff->title}}</h3>
                        </div>
                        <img src="{{ asset('storage/'.$staff->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$staff->nama}}</h5>
                            <p class="card-text text-start text-black">Jabatan : {{$staff->jabatan}} <br>
                            <span> NIP : {{$staff->NIP}}</span>
                            </p>
                            <a href="https://wa.me/{{$staff->no_tlp}}" class="btn">Kontak Saya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
