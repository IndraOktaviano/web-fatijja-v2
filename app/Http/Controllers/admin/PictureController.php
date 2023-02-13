<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index()
    {
        $data['pictures'] = Picture::all();
        return view('admin.picture.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $picture = new Picture;

        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/picture-g'), $name);
        };

        // data yang ingin disimpan
        $picture->title = $request->title;
        $picture->image = $name;

        // simpan data
        $post = $picture->save();

        if ($post) {
            return redirect()->route('admin.picture.index');
        } else {
            return back()->with('message', 'Picture not added');
        }
    }

    public function show(Picture $picture)
    {
        //
    }

    public function edit(Picture $picture)
    {
        //
    }

    public function update(Request $request, Picture $picture)
    {
        $picture = new Picture;

        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            // hapus file lama
            $path = public_path('assets/images/picture-g') . $picture->image;
            if (File::exists($path)) {
                unlink($path);
            }

            // tambah file baru
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/picture-g/'), $name);

            // update nama file di database
            $picture->image = $name;
        };

        // data yang ingin diubah
        $picture->title = $request->title;
        $picture->image = $name;

        // simpan data
        $update = $picture->save();

        if ($update) {
            return redirect()->route('admin.picture.index');
        } else {
            return back()->with('message', 'Picture not added');
        }
    }

    public function destroy(Picture $picture)
    {
        $path = public_path('assets/images/picture-g/'). $picture->image;
        // dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $picture->delete();
        return redirect()->route('admin.picture.index');
    }
}
