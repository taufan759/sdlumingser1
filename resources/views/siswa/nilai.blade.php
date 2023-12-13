@extends('layouts.dashboardSiswa')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-chart-simple"></i> Rekap Nilai {{auth()->user()->nama}} </p>
    <div class="text-center p-4">
        <p class="font-weight-bold"> ----- Belum Ada Rekap Nilai ----- </p>
    </div>
@endsection
