<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qlab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QlabController extends Controller
{
    public function index()
    {
        $data['qlab'] = Qlab::orderBy('created_at', 'desc')->get();
        return view('admin.qlab.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $qlab = new Qlab;

        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/pillar/q-lab'), $name);
        };

        // data yang ingin disimpan
        $qlab->title = $request->title;
        $qlab->image = $name;

        // simpan data
        $post = $qlab->save();

        if ($post) {
            return redirect()->route('admin.qlab.index');
        } else {
            return back()->with('message', 'Picture not added');
        }
    }

    public function show(Qlab $qlab)
    {
        //
    }

    public function edit(Qlab $qlab)
    {
        $data['qlab'] = Qlab::orderBy('created_at', 'desc')->get();
        $data['edit'] = $qlab;
        return view('admin.qlab.index', $data);
    }

    public function update(Request $request, Qlab $qlab)
    {
        // simpan gambar ke directory
        if ($request->hasFile('image')) {
            // hapus file lama
            $path = public_path('assets/images/pillar/q-lab/') . $qlab->image;
            if (File::exists($path)) {
                unlink($path);
            }

            // tambah file baru
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/pillar/q-lab/'), $name);

            // update nama file di database
            $qlab->image = $name;
        };

        // data yang ingin diubah
        $qlab->title = $request->title;
        $qlab->image = $name;

        // simpan data
        $update = $qlab->save();

        if ($update) {
            return redirect()->route('admin.picture.index');
        } else {
            return back()->with('message', 'Picture not added');
        }
    }

    public function destroy(Qlab $qlab)
    {
        $path = public_path('assets/images/pillar/q-lab/'). $qlab->image;
        // dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $qlab->delete();
        return redirect()->route('admin.qlab.index');
    }
}
