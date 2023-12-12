@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Postingan Berita </p>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info widget-chart widget-chart2 card mb-3 text-left">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left fsize-1 pr-2">
                            <div class="widget-numbers fsize-3 text-info mt-0">{{ $berita->count() }}</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                    aria-valuemax="100" style="width: {{ $berita->count() }}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Totals Berita</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-2">
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
                    <th>Judul</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Publish</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $berita)
                    <tr>
                        <td class="text-muted text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $berita->title }}</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle"
                                                src="{{ asset('storage/' . $berita->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="text-center">
                            @if ($berita->status == 1)
                                <div class="badge rounded-pill text-bg-success">Publish</div>
                            @elseif($berita->status == 2)
                                <div class="badge rounded-pill text-bg-danger">Draft</div>
                            @else
                                <!-- Handle other cases if needed -->
                            @endif
                        </td>

                        <td class="text-center">
                            <div class="badge rounded-pill text-bg-warning">{{ $berita->category->name }}</div>
                        </td>
                        <td class="text-center">
                            <div class="badge rounded-pill text-bg-light">{{ $berita->author->nama }}</div>
                        </td>
                        <td class="text-center">
                            {{ $berita->updated_at->diffForHumans() }}
                        </td>
                        <td class="text-center">
                            @if ($berita->status == 2)
                                <a href="/guru/publish/{{ $berita->id }}"  class="text-danger btn border-0" id="PopoverCustomT-2">
                                    <i class="fa-solid fa-thumbs-down"></i>
                                </a>
                            @elseif($berita->status == 1)
                                <a href="/guru/draft/{{ $berita->id }}"  id="PopoverCustomT-2" class=" text-success btn border-0">
                                    <i class="fa-regular fa-thumbs-up"></i>
                                </a>
                            @else
                                <!-- Handle other cases if needed -->
                            @endif
                            <button type="button" id="PopoverCustomT-2" class="btn btn-info btn-sm"><i
                                    class="fa-solid fa-user-pen"></i></button>
                            <button type="button" id="PopoverCustomT-2" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
