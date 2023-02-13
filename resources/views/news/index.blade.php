@extends('main')

@section('content')
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

            </div>
        </div>
    </div>
@endsection
