<?php

use App\Http\Controllers\AkunController;
use App\Models\akun;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil'); // Sesuaikan dengan nama file blade kamu
})->name('profil');


Route::get(
    '/pengumuman',
    [ App\Http\Controllers\pengumumanController::class, 'list']
);

Route::get(
    '/pengumuman/{id}',
    [ App\Http\Controllers\pengumumanController::class, 'Detail']
);

Route::get(
    '/kategori',
    [App\Http\Controllers\KategoriProdukController::class, 'list']
);

Route::get(
    '/produk',
    [App\Http\Controllers\ProdukController::class, 'list']
);

Route::get(
    '/kategori-produk/{id}',
    [App\Http\Controllers\ProdukController::class, 'list_kategori']
);

Route::get(
    '/produk/{id}',
    [App\Http\Controllers\ProdukController::class, 'detail']
);

Route::get('/akun', [akunController::class, 'detail'])->name('akun.detail');

use App\Http\Controllers\KeranjangController;

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::post('/keranjang/tambah/{id}', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
Route::post('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus'])->name('keranjang.hapus');
Route::post('/keranjang/kosongkan', [KeranjangController::class, 'kosongkan'])->name('keranjang.kosongkan');

Route::get('/pembayaran', [KeranjangController::class, 'pembayaran'])->name('keranjang.pembayaran');


// Routes untuk authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');
    
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
}); 

Route::get('/keranjang/pembayaran', [KeranjangController::class, 'pembayaran'])->name('keranjang.pembayaran');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');

Route::post('/keranjang/kosongkan', [KeranjangController::class, 'kosongkan'])->name('keranjang.kosongkan');

Route::post('/keranjang/proses-pembayaran', [KeranjangController::class, 'prosesPembayaran'])->name('keranjang.prosesPembayaran');