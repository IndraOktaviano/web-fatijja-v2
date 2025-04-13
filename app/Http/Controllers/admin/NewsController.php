<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = News::orderBy('created_at', 'desc')->get();
        return view('admin.news.index', $data);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $news = new News;

        // simpan gambar ke directory
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/news'), $name);
        };

        // buat slug berdasarkan judul
        $random = Str::random(15);
        $string = strtolower(str_replace(["'", '"'], '', $request->title));
        $string = strtolower(str_replace(' ', '-', $string));
        $slug = $string.'-'.$random;

        // data yang ingin disimpan
        $news->title = $request->title;
        $news->image = $name;
        $news->slug = $slug;
        $news->content = $request->content;

        // simpan data
        $post = $news->save();

        if ($post) {
            return redirect()->route('admin.news.index');
        }  else {
            return back()->with('message', 'News not added');
        }

    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        $data['edit'] = $news;
        return view('admin.news.edit', $data);
    }

    public function update(Request $request, News $news)
    {
        // simpan gambar ke directory
        if($request->hasFile('image')){
           // hapus file lama
           $path = public_path('assets/images/news').$news->image;
           if (File::exists($path)) {
               unlink($path);
           }

           // tambah file baru
            $file = $request->file('image');
            $name = $request->title . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/news/'), $name);

            // update nama file di database
            $news->image = $name;
        };

        // buat slug berdasarkan judul
        $random = Str::random(15);
        $string = strtolower(str_replace(["'", '"'], '', $request->title));
        $string = strtolower(str_replace(' ', '-', $string));
        $slug = $string.'-'.$random;

        // data yang ingin diubah
        $news->title = $request->title;
        $news->slug = $slug;
        $news->content = $request->content;

        // simpan perubahan
        $update = $news->save();

        if ($update) {
            return redirect()->route('admin.news.index');
        }  else {
            return back()->with('message', 'News not updated');
        }
    }

    public function destroy(News $news)
    {
        $path = public_path('assets/images/news/'). $news->image;
        // dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
