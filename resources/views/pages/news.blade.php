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
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('assets/img/Carousel1.jpg') }}" alt=""
                                            class="card-img-top rounded-3" style="object-fit: cover">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <div class="news overlay-content">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and
                                                        make up the
                                                        bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <div class="card rounded-3">
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt=""
                                            class="card-img-top rounded-3" style="object-fit: cover">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <div class="news overlay-content">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and
                                                        make up the
                                                        bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <div class="card rounded-3">
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('assets/img/Carousel3.jpg') }}" alt=""
                                            class="card-img-top rounded-3" style="object-fit: cover">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <div class="news overlay-content">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and
                                                        make up the
                                                        bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 pt-xl-0 pt-5 pt-md-3">
                <h4>Berita Terhangat</h4>
                <div class="ratio" style="--bs-aspect-ratio: 119.66%; height: 89%;">
                    <div class="card bg-dark px-3 text-white">
                        <div class="card-body overflow-slider">
                            <div class="card"></div>
                            <div id="hotnews"
                                class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                                <div class="ratio ratio-1x1 me-3">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid img-lg rounded-2" style="object-fit: cover">
                                </div>
                                <div>
                                    <a href="">
                                        <span>Virus Kills Member Of Advising Iran’s Supreme</span>
                                    </a>
                                    <div>
                                        </p>10 Minutes ago
                                    </div>
                                </div>
                            </div>
                            <div id="hotnews"
                                class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                                <div class="ratio ratio-1x1 me-3">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid img-lg rounded-2" style="object-fit: cover">
                                </div>
                                <div>
                                    <a href="">
                                        <span>Virus Kills Member Of Advising Iran’s Supreme</span>
                                    </a>
                                    <div>
                                        </p>10 Minutes ago
                                    </div>
                                </div>
                            </div>
                            <div id="hotnews"
                                class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                                <div class="ratio ratio-1x1 me-3">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid img-lg rounded-2" style="object-fit: cover">
                                </div>
                                <div>
                                    <a href="">
                                        <span>Virus Kills Member Of Advising Iran’s Supreme</span>
                                    </a>
                                    <div>
                                        </p>10 Minutes ago
                                    </div>
                                </div>
                            </div>
                            <div id="hotnews"
                                class="d-flex border-bottom-blue align-items-center justify-content-between pb-4 pt-3">
                                <div class="ratio ratio-1x1 me-3">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid img-lg rounded-2" style="object-fit: cover">
                                </div>
                                <div>
                                    <a href="">
                                        <span>Virus Kills Member Of Advising Iran’s Supreme</span>
                                    </a>
                                    <div>
                                        </p>10 Minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row pt-1 pt-md-3 " data-aos="fade-up">
            <div class="col stretch-card grid-margin">
                <h4>Semua Berita</h4>
                <div class="card rounded-3">
                    <div class="card-body">
                        <div id="allnews" class="row p-3">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin pt-2 pt-md-0">
                                <h2 class="font-weight-600 mb-2">
                                    South Korea’s Moon Jae-in sworn in vowing to address
                                    North
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    {!! Str::words(
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non iaculis dolor. Phasellus velit justo, venenatis eu nibh nec, tempor sagittis risus. Ut ut dolor vestibulum, laoreet dui ac, feugiat enim. Mauris at accumsan sapien. Maecenas porttitor ex nec metus ullamcorper, nec mattis neque pharetra. Quisque euismod scelerisque nunc et interdum. Nullam nec sagittis velit. Aliquam ligula nisi, consectetur placerat leo ut, efficitur imperdiet nunc. Maecenas dapibus nec nunc nec sagittis. Nunc et lorem consectetur, rutrum diam at, commodo ipsum. Curabitur non elit et mi laoreet tincidunt. Nunc sed mauris ut dolor posuere lacinia.',
                                        50,
                                        ' <a href="">Baca Selengkapnya...</a>',
                                    ) !!}
                                </p>
                            </div>
                        </div>
                        <div id="allnews" class="row p-3">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin pt-2 pt-md-0">
                                <h2 class="font-weight-600 mb-2">
                                    South Korea’s Moon Jae-in sworn in vowing to address
                                    North
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    {!! Str::words(
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non iaculis dolor. Phasellus velit justo, venenatis eu nibh nec, tempor sagittis risus. Ut ut dolor vestibulum, laoreet dui ac, feugiat enim. Mauris at accumsan sapien. Maecenas porttitor ex nec metus ullamcorper, nec mattis neque pharetra. Quisque euismod scelerisque nunc et interdum. Nullam nec sagittis velit. Aliquam ligula nisi, consectetur placerat leo ut, efficitur imperdiet nunc. Maecenas dapibus nec nunc nec sagittis. Nunc et lorem consectetur, rutrum diam at, commodo ipsum. Curabitur non elit et mi laoreet tincidunt. Nunc sed mauris ut dolor posuere lacinia.',
                                        50,
                                        ' <a href="">Baca Selengkapnya...</a>',
                                    ) !!}
                                </p>
                            </div>
                        </div>
                        <div id="allnews" class="row p-3">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin pt-2 pt-md-0">
                                <h2 class="font-weight-600 mb-2">
                                    South Korea’s Moon Jae-in sworn in vowing to address
                                    North
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    {!! Str::words(
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non iaculis dolor. Phasellus velit justo, venenatis eu nibh nec, tempor sagittis risus. Ut ut dolor vestibulum, laoreet dui ac, feugiat enim. Mauris at accumsan sapien. Maecenas porttitor ex nec metus ullamcorper, nec mattis neque pharetra. Quisque euismod scelerisque nunc et interdum. Nullam nec sagittis velit. Aliquam ligula nisi, consectetur placerat leo ut, efficitur imperdiet nunc. Maecenas dapibus nec nunc nec sagittis. Nunc et lorem consectetur, rutrum diam at, commodo ipsum. Curabitur non elit et mi laoreet tincidunt. Nunc sed mauris ut dolor posuere lacinia.',
                                        50,
                                        ' <a href="">Baca Selengkapnya...</a>',
                                    ) !!}
                                </p>
                            </div>
                        </div>
                        <div id="allnews" class="row p-3">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/Carousel2.jpeg') }}" alt="thumb"
                                        class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin pt-2 pt-md-0">
                                <h2 class="font-weight-600 mb-2">
                                    South Korea’s Moon Jae-in sworn in vowing to address
                                    North
                                </h2>
                                <div class="fs-13 mb-2">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                                <p class="mb-0">
                                    {!! Str::words(
                                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non iaculis dolor. Phasellus velit justo, venenatis eu nibh nec, tempor sagittis risus. Ut ut dolor vestibulum, laoreet dui ac, feugiat enim. Mauris at accumsan sapien. Maecenas porttitor ex nec metus ullamcorper, nec mattis neque pharetra. Quisque euismod scelerisque nunc et interdum. Nullam nec sagittis velit. Aliquam ligula nisi, consectetur placerat leo ut, efficitur imperdiet nunc. Maecenas dapibus nec nunc nec sagittis. Nunc et lorem consectetur, rutrum diam at, commodo ipsum. Curabitur non elit et mi laoreet tincidunt. Nunc sed mauris ut dolor posuere lacinia.',
                                        50,
                                        ' <a href="">Baca Selengkapnya...</a>',
                                    ) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
