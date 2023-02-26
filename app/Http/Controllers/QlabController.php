<?php

namespace App\Http\Controllers;

use App\Models\Qlab;
use Illuminate\Http\Request;

class QlabController extends Controller
{
    public function index()
    {
        $data['qlab'] = Qlab::orderBy('created_at', 'desc')->get();
        return view('q-lab', $data);
    }
}
