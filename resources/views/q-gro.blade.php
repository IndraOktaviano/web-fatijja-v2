@extends('main')

@section('css')
    <style>
        #q-gro li::marker {
            color: #a29a52;
        }

        #q-gro hr {
            border: 3px solid #a29a52 !important;
            border-radius: 5px !important;
            width: 16%;
            opacity: 1 !important;
        }
    </style>
@endsection

@section('content')
    <div id="q-gro">
        <div class="container py-4">
            <h1 class="fw-bold">Program Qur'an Grounded</h1>
            <hr>
            <ul class="d-flex justify-content-between">
                <li class="col mx-md-3">
                    <a href="{{ url('/#news') }}" class="text-danger text-decoration-none fw-bold">News Grounded</a> Program
                    ini akan memproduksi dan mempublikasi
                    konten Tagline, Artikel dan Berita berita yang berkaitan dengan Al Qur'an.
                </li>
                <li class="col mx-md-3">
                    <a href="{{ url('/#video') }}" class="text-danger text-decoration-none fw-bold">Videos Grounded</a>
                    Program ini akan memproduksi dan mempublikasi
                    konten video Youtube dan Social Media yang berkaitan dengan Al Qur'an.
                </li>
                <li class="col mx-md-3">
                    <a href="{{ url('/#pictures') }}" class="text-danger text-decoration-none fw-bold">Pictures Grounded</a>
                    program ini akan memproduksi dan mempublikasi
                    konten Foto Infografis dan Pamflet Campaign yang berkaitan dengan Al Qur'an.
                </li>
            </ul>
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
