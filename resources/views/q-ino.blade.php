@extends('main')

@section('css')
    <style>
        #q-ino .container .card {
            --bs-card-border-color: none;
            --bs-card-border-radius: 25px;
        }

        .shadow {
            box-shadow: 0 0.2rem 1rem rgba(var(--bs-body-color-rgb), 0.15) !important;
        }

    </style>
@endsection

@section('content')
    <div id="q-ino">
        <div class="container">
            <div class="card border-opacity-10 p-5 shadow">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/images/pillar/q-ino/mushaf.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/images/pillar/q-ino/terjemah.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/images/pillar/q-ino/tafsir.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 col-md-3">
                        <img src="{{ asset('assets/images/pillar/q-ino/tematik.png') }}" class="img-fluid" alt="">
                    </div>
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
@endsection
