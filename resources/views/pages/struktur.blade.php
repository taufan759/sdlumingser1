@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/struktur-organisasi.css') }}">

<div class="container-fluid p-0">
    <div class="text-center mb-5">
        <h1 class="organization-title">STRUKTUR ORGANISASI SEKOLAH</h1>
        <div class="line-separator"></div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="organization-structure">
        <!-- Kepala Sekolah -->
        <div class="organization-item">
            <div class="organization-image-wrapper">
                <img src="{{ asset('assets/img/struktur-org-exmpl.jpg') }}" alt="Struktur-Organisasi" class="organization-image">
            </div>
        </div>
    </div>
</div>

@endsection
