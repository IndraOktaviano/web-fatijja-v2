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
                        Produk Fatijja Qur'an dilengkapi fitur fitur yang memudah- kan pengguna dalam membaca,
                        menghafal, mempelajari, mentadaburi dan mengamalkan Al Qur an Fatijja Qur'an hadir sebagai
                        solusi bagi Umat Islam di Asia Tenggara terh- adap kebutuhan Al Quran.
                    </p>
                    <a href="" class="btn btn-light shadow border border-dark fw-bold text-green"
                        style="--bs-border-opacity: .25;">
                        "Bersama Merajut Keberkahan"
                    </a>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div id="carouselExample" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/hero/slide-1.png') }}" class="img-fluid"
                                    style="height: 70vh" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/hero/slide-2.png') }}" class="img-fluid"
                                    style="height: 70vh" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/hero/slide-3.png') }}" class="img-fluid"
                                    style="height: 70vh" alt="...">
                            </div>
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
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <h1 class="fw-bold">Description<br>Of Pilar</h1>
                    <hr>
                    <h3 class="fw-bold">Q-INO</h3>
                    <p>
                        <b>Melalui Q-INO (Quran Inovation)</b> Fatijja Qur'an berkomit- men untuk terus melahirkan
                        produk
                        produk yang inovatif kreatif adaptif terhadap perkembangan zaman, dan men- jawab kebutuhan Umat
                        Islam di Asia Tenggara terhadap Al Qur'an.
                    </p>
                    <a href="" class="rounded-0 btn btn-green">Selengkapnya</a>
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
                    <h1 class="fw-bold">Description<br>Of Pilar</h1>
                    <hr>
                    <h3 class="fw-bold">Q-EDU</h3>
                    <p>
                        <b>Melalui Q-EDU (Quran Education)</b> Fatijja Qur'an ber- komitment untuk terlibat dalam
                        ikhtiar
                        mencerdaskan Umat Islam di Asia Tenggara dengan program. program yang Edukatif,
                        Kreatif dan Solutif.
                    </p>
                    <a href="" class="rounded-0 btn btn-green">Selengkapnya</a>
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
                    <hr>
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

    <div id="q-gro" class="pillar py-5">
        <div class="container-fluid px-md-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <h1 class="fw-bold">Description<br>Of Pilar</h1>
                    <hr>
                    <h3 class="fw-bold">Q-GRO</h3>
                    <p>
                        <b>Melalui Q-GRO (Quran Grounded)</b> Fatijja Qur'an berkotmitment untuk Mensyiarkan Al Qur'an
                        Seluas luasnya dengan menjadikan platform digital sebagai tools utama dalam produksi dan publikasi
                        konten-konten yang bermanfaat.
                    </p>
                    <a href="" class="rounded-0 btn btn-green">Selengkapnya</a>
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

                <div class="col-12 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/news/news-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/news/news-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/news/news-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
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

                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="card border-0 rounded-none">
                        <iframe height="250" src="https://www.youtube.com/embed/qT1eI9t9sqI" {{-- title="AIDIL & ATOK | FILEM PENDEK -  ARAHAN SENIWATI FAUZIAH DATO' AHMAD DAUD A.M.N" --}}
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="card border-0 rounded-none">
                        <iframe height="250" src="https://www.youtube.com/embed/PYW4l7gEgNk" {{-- title="Pokok dan Batu Akan BERCAKAP".. | Ustaz Wadi Annuar"  --}}
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
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

                <div class="col-6 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/picture-g/picture-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <h4 class="card-title text-center">Contoh</h4>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/picture-g/picture-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <h4 class="card-title text-center">Contoh</h4>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card border-0 rounded-none">
                        <img src="{{ asset('assets/images/picture-g/picture-1.png') }}" class="card-img-top rounded-0"
                            alt="{{ asset('assets/images/news/news-1.png') }}">
                        <div class="card-body">
                            <h4 class="card-title text-center">Contoh</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
