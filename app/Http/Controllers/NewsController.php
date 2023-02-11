<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = News::all();
        return view('news.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(News $news)
    {
        return view('news.show');
    }

    public function edit(News $news)
    {
        //
    }

    public function update(Request $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
