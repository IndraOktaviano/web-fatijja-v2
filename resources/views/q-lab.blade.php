@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($qlab as $item)
                <div class="col-6 col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/pillar/q-lab/'. $item->image) }}" class="card-img-top" alt="{{$item->title}}">
                        <div class="card-body">
                            <h6 class="card-title text-center">{{$item->title}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
