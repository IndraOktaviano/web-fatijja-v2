<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::orderBy('created_at', 'desc')->get();
        return view('admin.banner.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = new Banner;

        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = 'banner' . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/hero/banner'), $name);
        };

        // data yang ingin disimpan
        $data->image = $name;

        // simpan data
        $post = $data->save();

        if ($post) {
            return redirect()->route('admin.banner.index');
        } else {
            return back()->with('message', 'banner not added');
        }
    }

    public function show(Banner $banner)
    {
        //
    }

    public function edit(Banner $banner)
    {
        $data['banners'] = Banner::orderBy('created_at', 'desc')->get();
        $data['edit'] = $banner;
        return view('admin.banner.index', $data);
    }

    public function update(Request $request, Banner $banner)
    {
        // hapus file lama
        $path = public_path('assets/images/hero/banner').$banner->image;
        if (File::exists($path)) {
            unlink($path);
        }

        // tambah file baru
        $file = $request->file('image');
        $name = 'banner' . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/images/hero/banner/'),$name);

        // data yang ingin diubah
        $banner->image = $name;

        // simpan data
        $update = $banner->save();

        if ($update) {
            return redirect()->route('admin.banner.index');
        } else {
            return back()->with('message', 'Banner not added');
        }
    }

    public function destroy(Banner $banner)
    {
        $path = public_path('assets/images/hero/slide/') . $banner->image;
        // dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $banner->delete();
        return redirect()->route('admin.banner.index');
    }
}
