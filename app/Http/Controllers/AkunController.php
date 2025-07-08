<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini jika Anda menggunakan autentikasi

class AkunController extends Controller
{
    public function detail()
    {
        // Mendapatkan data pengguna yang sedang login
        $data = Auth::user(); // Tambahkan ini jika Anda menggunakan autentikasi

        if ($data) {
            // Mengirimkan data pengguna ke view detail.blade.php
            return view('akun.detail', compact('data'));
        } else {
            // Pengguna belum login, redirect ke halaman login atau tampilkan pesan error
            return redirect('/login'); // Ganti '/login' dengan rute login Anda
        }
    }
}