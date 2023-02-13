<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $data['videos'] = Video::orderBy('created_at', 'asc')->get();
        return view('admin.video.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $video = new Video;
        $video->link = $request->link;

        $post = $video->save();

        if ($post) {
            return redirect()->route('admin.video.index');
        }  else {
            return back()->with('message', 'Video not added');
        }
    }

    public function show(Video $video)
    {
        //
    }

    public function edit(Video $video)
    {
        $data['videos'] = Video::orderBy('created_at', 'asc')->get();
        $data['edit'] = $video;
        return view('admin.video.index', $data);
    }

    public function update(Request $request, Video $video)
    {
        $video->link = $request->link;
        $update = $video->save();

        if ($update) {
            return redirect()->route('admin.video.index');
        }  else {
            return back()->with('message', 'Video not updated');
        }
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index');
    }
}
