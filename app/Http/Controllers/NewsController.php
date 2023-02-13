<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = News::orderBy('created_at', 'DESC')->get();
        return view('news.index', $data);
    }

    public function show(News $news)
    {
        $data['news'] = $news;
        return view('news.show', $data);
    }
}
