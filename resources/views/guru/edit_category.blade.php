@extends('layouts.dashboardLayout')
@section('content')
<p class="font-weight-bold"> <i class="fa-solid fa-layer-group"></i> Create Category Berita</p>
<div class="col-md-6 col-lg-3">
    <div class="card-shadow-info widget-chart widget-chart2 card mb-3 text-left">
        <div class="widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left fsize-1 pr-2">
                        <div class="widget-numbers fsize-3 text-info mt-0">{{ $categories->count() }}</div>
                    </div>
                    <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{ $categories->count() }}%;"></div>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left fsize-1">
                    <div class="text-muted opacity-6">Totals Category</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <form method="POST" action="{{ url('/guru/updated/category/'.$category->id) }}">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama Category') }}</label>
            <div class="col-sm-10">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ $category->name}}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('edit Sekarang') }}
                </button>
            </div>
        </div>
    </form>

    <div class=" mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Category" class="form-control">
          </div>
    </div>
    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categories)
                <tr>
                    <td class="text-muted text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{ $categories->name  }}</td>
                    <td class="text-center">
                        <a href="/guru/edit/category/{{$categories->id}}" type="button" id="PopoverCustomT-2"
                        class="btn btn-info btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                        <a href="/guru/delete/category/{{$categories->id}}" type="button" id="PopoverCustomT-2"
                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
