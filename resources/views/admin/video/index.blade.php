@extends('admin.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Daftar Video</strong>
                </div>
                <div class="card-body">
                    <form
                        @if (isset($edit))
                            action="{{ route('admin.video.update', $edit->id) }}"
                        @else
                            action="{{ route('admin.video.store') }}"
                        @endif
                        method="post" novalidate="novalidate">
                        @method((isset($edit) ? 'PUT' : 'POST'))
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-12 mb-4">
                                <div class="input-group">
                                    <input type="text" id="link" name="link" placeholder="Kode Embed"
                                        value="{{ isset($edit) ? $edit->link : '' }}" class="form-control">
                                    <div class="input-group-btn"><button type="submit"
                                            class="btn btn-primary">Simpan</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Video</th>
                                <th>Tanggal Buat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <iframe width="250" src="https://www.youtube.com/embed/{{ $item->link }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen>
                                        </iframe>
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.video.edit', $item->id) }}" class="btn btn-primary">Ubah</a>
                                        <a class="btn btn-danger text-light" onclick="event.preventDefault();document.getElementById('delete-form-{{ $item->id }}').submit();">Hapus</a>
                                        <form id="delete-form-{{ $item->id }}" action="{{route('admin.video.destroy', $item->id)}}" method="post" class="mx-0">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/admin/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/init/datatables-init.js') }}"></script>
@endsection
