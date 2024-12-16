@extends('layouts.default')

@section('content')
<div class="container" style="margin-top: 75px; margin-bottom: 75px;">
    <!-- Title Section -->
    <div class="row mb-5">
        <div data-aos="fade-up" class="col text-center">
            <h1 class="title fw-bold">Guru & Staff</h1>
            <div class="line-separator mx-auto"></div>
            <h2 class="subtitle">SDN Lumingser 01</h2>
        </div>
    </div>
    <!-- Guru Section -->
    <div class="row">
        @foreach ($guru as $guruItem)
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div data-aos="fade-up" class="card shadow border-0">
                    <img src="{{ asset('storage/' . $guruItem->image) }}" class="card-img-top rounded" alt="Guru" style="height: 150px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-1">{{ $guruItem->nama }}</h6>
                        <p class="text-muted mb-1">{{ $guruItem->jabatan }}</p>
                        <p class="text-muted"><small>NIP: {{ $guruItem->NIP }}</small></p>
                        <a href="https://wa.me/{{ $guruItem->no_tlp }}" class="btn btn-outline-primary btn-sm">Kontak</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Separator -->
    <div class="row mb-5">
        <div class="col">
            <hr class="text-muted" style="border-top: 2px solid #dee2e6;">
        </div>
    </div>

    <!-- Staff Section -->
    <div class="row">
        @foreach ($staff as $staffItem)
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div data-aos="fade-up" class="card shadow border-0">
                    <img src="{{ asset('storage/' . $staffItem->image) }}" class="card-img-top rounded" alt="Staff" style="height: 150px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-1">{{ $staffItem->nama }}</h6>
                        <p class="text-muted mb-1">{{ $staffItem->jabatan }}</p>
                        <p class="text-muted"><small>NIP: {{ $staffItem->NIP }}</small></p>
                        <a href="https://wa.me/{{ $staffItem->no_tlp }}" class="btn btn-outline-primary btn-sm">Kontak</a>
                    </div>
                </div>
            </div>
        @endforeach
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
        font-size: calc(1.1rem + 0.6vw);
        color: #333;
        font-style: normal;
    }
</style>
@endsection
