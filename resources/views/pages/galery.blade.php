@extends('layouts.default')
@section('content')
<div class="vh-100">
    <div class="row" style="padding-top: 75px">
        <div data-aos="fade-up" class="col text-center">
            <h1>Profil Sekolah</h1>
            <h2>SD Negeri Kesamiran 01</h2>
        </div>
    </div>
    <section class="row">
        <!-- Section: Images -->
        <section class="col-md-10 m-auto">
            <div class="row">
                @foreach ($galery as $galleryItem)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div data-aos="fade-up" class="card bg-image hover-overlay ripple shadow-1-strong rounded">
                            <a href="{{ '/news/' . $galleryItem->id_title }}">
                                <img src="{{ asset('storage/' . $galleryItem->image) }}" class="w-100 rounded" alt="Gallery Image"/>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
</div>

@endsection
