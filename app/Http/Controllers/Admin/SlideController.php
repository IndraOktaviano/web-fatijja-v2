<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class SlideController extends Controller
{
    public function index()
    {
        $data['slides'] = Slide::all();
        return view('admin.slide.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = new Slide;

        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = 'slide' . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/hero/slide'), $name);
        };

        // data yang ingin disimpan
        $data->image = $name;

        // simpan data
        $post = $data->save();

        if ($post) {
            return redirect()->route('admin.slide.index');
        } else {
            return back()->with('message', 'Slide not added');
        }
    }

    public function show(Slide $slide)
    {
        //
    }

    public function edit(Slide $slide)
    {
        $data['slides'] = Slide::orderBy('created_at', 'asc')->get();
        $data['edit'] = $slide;
        return view('admin.slide.index', $data);
    }

    public function update(Request $request, Slide $slide)
    {
        // hapus file lama
        $path = public_path('assets/images/hero/slide').$slide->image;
        if (File::exists($path)) {
            unlink($path);
        }

        // tambah file baru
        $file = $request->file('image');
        $name = 'slide' . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/images/hero/slide/'),$name);

        // data yang ingin diubah
        $slide->image = $name;

        // simpan data
        $update = $slide->save();

        if ($update) {
            return redirect()->route('admin.slide.index');
        } else {
            return back()->with('message', 'Slide not added');
        }
    }

    public function destroy(Slide $slide)
    {
        $path = public_path('assets/images/hero/slide/') . $slide->image;
        // dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $slide->delete();
        return redirect()->route('admin.slide.index');
    }
}
