<?php

namespace App\Http\Controllers;

use App\Models\Picture;

class PictureController extends Controller
{
    public function index()
    {
        $data['pictures'] = Picture::all();
        return view('picture.index', $data);
    }
}
