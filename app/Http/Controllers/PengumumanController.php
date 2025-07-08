<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\pengumuman;

class PengumumanController extends Controller
{
    public function list():view 
    {
        $data = pengumuman::all();
        return view('pengumuman.list', ['data' => $data]);
    }
    public function detail($id):view 
    {
        $data = pengumuman::find($id);
        return view('pengumuman.detail', ['data' => $data]);
    }
}

