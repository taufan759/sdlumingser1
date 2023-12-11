@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row" style="padding-top: 100px">
        </div>
        <div class="row">
            <div class="col-xl-8">
                <h4>Berita Terbaru</h4>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="">
                                <div class="card rounded-3">
                                    <img src="{{ asset('assets/img/Carousel1.jpg') }}" alt=""
                                        class="card-img-top rounded-3" style="object-fit: cover">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <div class="news overlay-content">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <div class="card rounded-3">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt=""
                                        class="card-img-top rounded-3" style="object-fit: cover">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <div class="news overlay-content">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <div class="card rounded-3">
                                    <img src="{{ asset('assets/img/Carousel3.jpg') }}" alt=""
                                        class="card-img-top rounded-3" style="object-fit: cover">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <div class="news overlay-content">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the
                                                    bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <h4>Berita Terhangat</h4>
                <div class="card bg-dark px-3 text-white">
                    <div class="card-body">
                        <div class="card"></div>
                        <div class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                            <div class="pr-3">
                                <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                                <div class="fs-12">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                            </div>
                            <div class="rotate-img">
                                <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid img-lg">
                            </div>
                        </div>

                        <div class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-4">
                            <div class="pr-3">
                                <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                                <div class="fs-12">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                            </div>
                            <div class="rotate-img">
                                <img src="assets/images/dashboard/home_2.jpg" alt="thumb" class="img-fluid img-lg">
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-4">
                            <div class="pr-3">
                                <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                                <div class="fs-12">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                            </div>
                            <div class="rotate-img">
                                <img src="assets/images/dashboard/home_3.jpg" alt="thumb" class="img-fluid img-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row" data-aos="fade-up">
            <div class="col stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="assets/images/dashboard/home_4.jpg" alt="thumb" class="img-fluid">
                                    </div>
                                    <div class="badge-positioned">
                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin">
                                <h2 class="font-weight-600 mb-2">
                                    South Korea’s Moon Jae-in sworn in vowing to address
                                    North
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s, when an
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="assets/images/dashboard/home_5.jpg" alt="thumb" class="img-fluid">
                                    </div>
                                    <div class="badge-positioned">
                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin">
                                <h2 class="font-weight-600 mb-2">
                                    No charges over 2017 Conservative battle bus cases
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s, when an
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="assets/images/dashboard/home_6.jpg" alt="thumb" class="img-fluid">
                                    </div>
                                    <div class="badge-positioned">
                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2 class="font-weight-600 mb-2">
                                    Kaine: Trump Jr. may have committed treason
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    Lorem Ipsum has been the industry's standard dummy
                                    text ever since the 1500s, when an
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
