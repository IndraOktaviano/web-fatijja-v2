@extends('main')

@section('css')
    <style>
        #q-edu li::marker {
            color: #a29a52;
        }

        #q-edu hr {
            border: 3px solid #a29a52 !important;
            border-radius: 5px !important;
            width: 16%;
            opacity: 1 !important;
        }
    </style>
@endsection

@section('content')
    <div id="q-edu">
        <div class="container py-4">
            <h1 class="fw-bold">Program Qur'an Education</h1>
            <hr>
            <ul class="d-flex justify-content-between">
                <li class="col mx-md-3">
                    <span class="fw-bold">Event Metode : </span>Fatijja Qur'an berikhtiar Mendidik Generasi Muslim agar mampu
                    baca Al-Qur'an secara baik dan benar serta melahirkan jutaan generasi muslim yang hafal Al Qur'an dengan
                    metode terbarukan dari ahli ahli Qur'an dunia.
                </li>
                <li class="col mx-md-3">
                    <span class="fw-bold">Event Pelatihan : </span>Fatijja Qur'an berikhtiar Mewujudkan SDM Guru Ngaji
                    Musyrif Lil Hifzhil Qur'an dan Pengajar Baca Qur'an Braile yang kredibel berintegritas serta berwawasan
                    ilmu qur'an secara mendalam dan terukur.
                </li>
                <li class="col mx-md-3">
                    <span class="fw-bold">Event Qur'an Awards : </span>Fatijja Qur'an berkomitmen untuk Memulaikan Shohibul
                    Qur'an dengan memberikan penghargaan kepada para Huffadzhotul Qur'an, Quro'ul Quran, Du'atul Qur'an,
                    Khudama'ul Qur'an, Muassatul Qur'an, dan Madaris wal Ma'ahidul Qur'an. Program ini juga akan memberikan
                    Ruang kepada tunas tunas umat Islam untuk berpacu meraih prestasi dan mengasah potensi di bidang Qur'an.
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
                    <a href="{{url('/q-gro')}}" class="rounded-0 btn btn-green">Selengkapnya</a>
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/pillar/q-gro.png') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>
@endsection
