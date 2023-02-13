@extends('main')

@section('content')
    <div class="container">
        <div class="row mt-md-5">

            {{-- judul berita --}}
            <div class="col-12 mb-3">
                <h2 class="fw-bold text-center">
                    {{ $news->title }}
                </h2>
            </div>

            {{-- gambar berita --}}
            <div class="col-12 mb-3">
                <img src="{{ asset('assets/images/news/' . $news->image) }}" alt="" class="img-fluid">
            </div>

            {{-- isi berita --}}
            <div class="col-12">
                {{-- <small class="font-italic">{{$news->created_at}}</small> --}}
            </div>
            <div class="col-12">
                {!! $news->content !!}
            </div>
        </div>
        {{-- @foreach ($news as $item)
        @endforeach --}}
    </div>
@endsection
