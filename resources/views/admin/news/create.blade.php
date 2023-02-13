@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tambah Berita</strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.news.store')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title" class="control-label mb-1">Judul</label>
                            <input id="title" name="title" type="text" class="form-control" aria-required="true"
                                aria-invalid="false" value="">
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label mb-1">Thumbnail</label>
                            <input id="image" name="image" type="file" class="form-control" aria-required="true"
                                aria-invalid="false" value="">
                        </div>
                        <div class="form-group">
                            <label for="content" class="control-label mb-1">Konten</label>
                            <textarea id="default-editor" id="content" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
