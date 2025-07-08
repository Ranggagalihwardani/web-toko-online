<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategorProduk;
use illuminate\View\View;

class ProdukController extends Controller
{
    public function list(): view
    {
        $data = Produk::all();
        return view('produk.list', ['data' =>$data]);

    }

    public function list_kategori($id): view
    {
        $data =Produk::where("kategori_id",$id)->get();
        $dataKategori = KategoriProduk::find($id);
        return view('produk.kategori', ['data' => $data, 'kategori'=>$dataKategori]);
    }

    public function detail($id):view
    {
        $data =Produk::find($id);
        return view('produk.detail', ['data' => $data]);
    }
}
