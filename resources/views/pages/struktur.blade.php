@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/struktur-organisasi.css') }}">

<div class="container-fluid p-0">
    <div class="text-center mb-5">
        <h1 class="organization-title">STRUKTUR ORGANISASI SEKOLAH</h1>
        <div class="line-separator"></div>
        <h2 class="subtitle">SDN Lumingser 01</h2>
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

<style>
    .title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    
    .line-separator {
        width: 60px;
        height: 3px;
        background-color: #007BFF; 
        margin: 10px auto 15px;
    }
    .subtitle {
        font-size: calc(1.325rem + .9vw);
        color: #333;
        font-style: normal;
    }
</style>
@endsection