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
                    <strong class="card-title">Daftar Q-Lab</strong>
                </div>
                <div class="card-body">
                    <form

                        @if (isset($edit))
                            action="{{ route('admin.qlab.update', $edit->id) }}"
                        @else
                            action="{{ route('admin.qlab.store') }}"
                        @endif
                        method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @method((isset($edit) ? 'PUT' : 'POST'))
                        @csrf

                        <div class="row form-group">
                            <div class="col">
                                <label for="title" class="control-label mb-1">Judul</label>
                                <input type="text" id="title" name="title" placeholder="Judul Gambar" value="{{ isset($edit) ? $edit->title : '' }}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="image" class="control-label mb-1">Gambar</label>
                                <input type="file" id="image" name="image" value="{{ isset($edit) ? $edit->image : '' }}" class="form-control">
                            </div>
                        </div>
                        <div class="input-group-btn"><button type="submit" class="btn btn-primary mb-3">Simpan</button></div>

                    </form>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($qlab as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/pillar/q-lab/'.$item->image) }}" width="100" alt="" srcset="">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.qlab.edit', $item->id) }}" class="btn btn-primary">Ubah</a>
                                        <a class="btn btn-danger text-light" onclick="event.preventDefault();document.getElementById('delete-form-{{ $item->id }}').submit();">Hapus</a>
                                        <form id="delete-form-{{ $item->id }}" action="{{route('admin.qlab.destroy', $item->id)}}" method="post" class="mx-0">
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
