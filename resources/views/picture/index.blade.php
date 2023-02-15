@extends('main')

@section('content')
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
                            <img src="{{ asset('assets/images/picture-g/' . $picture->image) }}" class="card-img-top rounded-0"
                                alt="{{ $picture->title }}">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $picture->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
