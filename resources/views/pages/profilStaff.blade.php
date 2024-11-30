@extends('layouts.default')

@section('content')
    <div style="padding-top: 75px; class="container mt-5">
        <div class="row text-center mb-4">
            <div class="col">
                <h1>Profil Kepala Sekolah, Guru dan Staff</h1>
                <h2>SD Negeri Lumingser 01</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($kepsek as $kepsekItem)
                <div class="col p-5 pt-3">
                    <div data-aos="fade-up" class="card rounded-4 mx-auto text-center shadow-lg" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="fw-medium">{{ $kepsekItem->title }}</h3>
                            </div>
                            <img src="{{ asset('storage/' . $kepsekItem->image) }}" class="card-img-top" alt="Kepala Sekolah">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kepsekItem->nama }}</h5>
                                <p class="card-text text-start text-black">Jabatan : {{ $kepsekItem->jabatan }} <br>
                                    <span> NIP : {{ $kepsekItem->NIP }}</span>
                                </p>
                                <a href="https://wa.me/{{ $kepsekItem->no_tlp }}" class="btn btn-primary">Kontak Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <!-- Guru -->
            @foreach ($guru as $guruItem)
                <div class="col-6 col-md-3 mb-4">
                    <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h3 class="fw-medium">{{ $guruItem->title }}</h3>
                            </div>
                            <img src="{{ asset('storage/' . $guruItem->image) }}" class="card-img-top" alt="Guru">
                            <div class="card-body">
                                <h5 class="card-title">{{ $guruItem->nama }}</h5>
                                <p class="card-text text-start text-black">Jabatan : {{ $guruItem->jabatan }} <br>
                                    <span> NIP : {{ $guruItem->NIP }}</span>
                                </p>
                                <a href="https://wa.me/{{ $guruItem->no_tlp }}" class="btn btn-primary">Kontak Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <!-- Staff -->
            @foreach ($staff as $staffItem)
                <div class="col-6 col-md-3 mb-4">
                    <div data-aos="fade-up" class="card rounded-4 shadow-lg">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h3 class="fw-medium">{{ $staffItem->title }}</h3>
                            </div>
                            <img src="{{ asset('storage/' . $staffItem->image) }}" class="card-img-top" alt="Staff">
                            <div class="card-body">
                                <h5 class="card-title">{{ $staffItem->nama }}</h5>
                                <p class="card-text text-start text-black">Jabatan : {{ $staffItem->jabatan }} <br>
                                    <span> NIP : {{ $staffItem->NIP }}</span>
                                </p>
                                <a href="https://wa.me/{{ $staffItem->no_tlp }}" class="btn btn-primary">Kontak Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection