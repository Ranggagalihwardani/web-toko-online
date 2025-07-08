<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use illuminate\View\View;

class KategoriProdukController extends Controller
{
    public function list(): view
    {
        $data = KategoriProduk::all();
        return view('kategori_produk.list', ['data' =>$data]);
    }
}
