@extends('layouts.default')

@section('content')
    <div class="row" style="padding-top: 100px">
        <div class="col text-center">
            <h1>Profil Kepala Sekolah, Guru dan Staff</h1>
            <h2>SD Negeri Kesamiran 01</h2>
        </div>
    </div>
    <div class="row">
        <div class="col p-5 pt-3">
            <div class="card rounded-4 shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="fw-medium text-center">Kepala Sekolah</h3>
                    </div>
                    <div class="card-text text-center mx-auto" style="width: auto;">
                        <div class="card">
                            <img src="{{ asset('assets/img/kepsek.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kepala Sekolah</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn">Hubungi Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-5 pt-3">
            <div class="card rounded-4 shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="fw-medium text-center">Guru</h3>
                    </div>
                    <div class="card-text text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-5 pt-3">
            <div class="card rounded-4 shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="fw-medium text-center">Staff</h3>
                    </div>
                    <div class="card-text text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
