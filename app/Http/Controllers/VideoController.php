<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $data['videos'] = Video::all();
        return view('video.index', $data);
    }
}
