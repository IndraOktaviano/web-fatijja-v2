@extends('main')

@section('content')
    <div class="hero" id="startchange">
        <div class="container-fluid px-md-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3 class="fw-bold">Fatijja Qur'an</h3>
                    <h1 class="fw-bold">Penerbit Al-Qur'an Modern di Asia Tenggara</h1>
                    <p class="fw-semibold">
                        Fatijja Qur'an adalah produsen Al Qur'an terbaik di Asia Tenggara dengan produk Al Qur'an yang
                        inovatif dirancang berdasarkan hasil riset dan bimbingan para ahli Produk didesign modern agar
                        membuat pengguna lebih nyaman saat berinteraksi dengan Al Qur'an.
                        <br>
                        Produk Fatijja Qur'an dilengkapi fitur fitur yang memudahkan pengguna dalam membaca,
                        menghafal, mempelajari, mentadaburi dan mengamalkan Al Qur an Fatijja Qur'an hadir sebagai
                        solusi bagi Umat Islam di Asia Tenggara terhadap kebutuhan Al Quran.
                    </p>
                    <a href="" class="btn btn-light shadow border border-dark fw-bold text-green"
                        style="--bs-border-opacity: .25;">
                        "Bersama Merajut Keberkahan"
                    </a>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-center mx-lg-auto">
                    <div id="carouselExample" class="carousel slide">

                        <div class="carousel-inner">
                            @foreach ($slides as $key => $slide)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('assets/images/hero/slide/' . $slide->image) }}" class="img-fluid"
                                        style="height: 70vh" alt="...">
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="q-ino" class="pillar py-5">
        <div class="container-fluid px-md-5">
            <div class="row align-items-start">
                <div class="col-12 col-md-5">
                    {{-- <h1 class="fw-bold">Description<br>Of Pilar</h1> --}}
                    {{-- <hr> --}}
                    <h3 class="fw-bold">Q-INO</h3>
                    <p>
                        <b>Melalui Q-INO (Quran Inovation)</b> Fatijja Qur'an berkomitmen untuk terus melahirkan
                        produk
                        produk yang inovatif kreatif adaptif terhadap perkembangan zaman, dan menjawab kebutuhan Umat
                        Islam di Asia Tenggara terhadap Al Qur'an.
                    </p>
                    <a href="{{ url('q-ino') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/pillar/image-1.png') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div id="q-edu" class="pillar py-5">
        <div class="container-fluid px-md-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    {{-- <h1 class="fw-bold">Description<br>Of Pilar</h1> --}}
                    {{-- <hr> --}}
                    <h3 class="fw-bold">Q-EDU</h3>
                    <p>
                        <b>Melalui Q-EDU (Quran Education)</b> Fatijja Qur'an berkomitment untuk terlibat dalam
                        ikhtiar
                        mencerdaskan Umat Islam di Asia Tenggara dengan program. program yang Edukatif,
                        Kreatif dan Solutif.
                    </p>
                    <a href="{{ url('/q-edu') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/pillar/image-2.png') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div id="q-lab" class="pillar mb-5 pt-5">
        <div class="container-fluid px-md-5">
            <div class="row">
                <div class="col-12 col-md-5 py-5 text-light">
                    <h3 class="fw-bold">Q-LAB</h3>
                    {{-- <hr> --}}
                    <p>
                        <b>Melalui Q-LAB (Quran Collaboration)</b> Fatijja Qur'an berkomitment untuk Bergerak dan Tumbuh
                        secara Kolaboratif dengan berbagai stakeholder Fatijja Qur'an juga akan berperan sebagai Penghasil
                        Konektifitas agar stakeholder se Asia Tenggara dapat terhubung dan bertukar kepentingan dalam dunia
                        Qur'an.
                    </p>
                    {{-- <a href="" class="rounded-0 btn btn-green">Selengkapnya</a> --}}
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center align-items-end">
                    <img src="{{ asset('assets/images/pillar/q-lab/picture-1.png') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div id="banner-carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/images/hero/banner-web.png')}}" class="d-block w-100" alt="{{asset('assets/images/hero/banner-web.png')}}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="q-gro" class="pillar py-5">
        <div class="container-fluid px-md-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    {{-- <h1 class="fw-bold">Description<br>Of Pilar</h1> --}}
                    {{-- <hr> --}}
                    <h3 class="fw-bold">Q-GRO</h3>
                    <p>
                        <b>Melalui Q-GRO (Quran Grounded)</b> Fatijja Qur'an berkotmitment untuk Mensyiarkan Al Qur'an
                        Seluas luasnya dengan menjadikan platform digital sebagai tools utama dalam produksi dan publikasi
                        konten-konten yang bermanfaat.
                    </p>
                    <a href="{{ url('/q-gro') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/pillar/q-gro.png') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div id="news" class="news mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-2 text-center">
                    <h1 class="fw-bold">News Grounded</h1>
                    <p>informasi publikasi konten</p>
                </div>

                @foreach ($news as $item)
                    <div class="col-12 col-md-4">
                        <a href="{{ url('news', $item->slug) }}" class="text-decoration-none">
                            <div class="card border-0 rounded-none">
                                <img src="{{ asset('assets/images/news/' . $item->image) }}" class="card-img-top rounded-0"
                                    alt="{{ asset('assets/images/news/') . $item->slug }}">
                                <div class="card-body">
                                    <h5 class="card-text text-center text-black fw-bold">{{ $item->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-12 d-flex justify-content-center mt-3">
                    <a href="{{ url('news') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>

            </div>
        </div>
    </div>

    <div id="video" class="video mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-2 text-center">
                    <h1 class="fw-bold">Videos Grounded</h1>
                    <p>Memproduksi dan mempublikasi konten video Youtube</p>
                </div>

                @foreach ($videos as $video)
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="card border-0 rounded-none">
                            <iframe height="250" src="https://www.youtube.com/embed/{{ $video->link }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 d-flex justify-content-center mt-3">
                    <a href="{{ url('video') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>

            </div>
        </div>
    </div>

    <div id="pictures" class="pictures mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-2 text-center">
                    <h1 class="fw-bold">Picture Grounded</h1>
                    <p>Mempublikasi konten Foto, Infografis dan Pamflet Campaign yang berkaitan dengan Al Qur'an</p>
                </div>

                @foreach ($pictures as $picture)
                    <div class="col-6 col-md-4">
                        <div class="card border-0 rounded-none">
                            <img src="{{ asset('assets/images/picture-g/' . $picture->image) }}"
                                class="card-img-top rounded-0" alt="{{ $picture->title }}">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $picture->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 d-flex justify-content-center mt-3">
                    <a href="{{ url('picture') }}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>

            </div>
        </div>
    </div>
@endsection
