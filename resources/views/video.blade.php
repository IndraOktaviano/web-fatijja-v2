@extends('main')

@section('content')
    <div id="video" class="video mb-5">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 mb-2 text-center">
                    <h1 class="fw-bold">Videos Grounded</h1>
                    <p>Memproduksi dan mempublikasi konten video Youtube</p>
                </div>

                @foreach ($videos as $video)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card border-0 rounded-none">
                            <iframe height="250" src="https://www.youtube.com/embed/{{ $video->link }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
