<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Picture;
use App\Models\Slide;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $data['slides'] = Slide::all();
        $data['news'] = News::orderBy('created_at', 'asc')->take(3)->get();
        $data['videos'] = Video::orderBy('created_at', 'asc')->get();
        $data['pictures'] = Picture::orderBy('created_at', 'asc')->get();
        return view('index', $data);
    }
}
