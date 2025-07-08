<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KeranjangController extends Controller
{
    // Menampilkan isi keranjang
    public function index()
{
    $keranjang = session()->get('keranjang', []);
    return view('keranjang.index', compact('keranjang')); // ✅ Bukan 'keranjang' saja
}

public function prosesPembayaran(Request $request)
{
    $metode = $request->input('metode_pembayaran');
    $keranjang = session()->get('keranjang', []);
    $totalHarga = 0;

    foreach ($keranjang as $item) {
        $totalHarga += $item['Harga'] * $item['jumlah'];
    }

    // Simulasi redirect sesuai metode pembayaran
    if ($metode === 'transfer') {
        return back()->with('success', 'Silakan transfer ke rekening 123456789 atas nama TOKO ZENITH. Total: Rp' . number_format($totalHarga));
    } elseif ($metode === 'cod') {
        return back()->with('success', 'Pesanan kamu akan dikirim, bayar langsung saat barang tiba. Total: Rp' . number_format($totalHarga));
    } elseif ($metode === 'ewallet') {
        return back()->with('success', 'Silakan bayar lewat E-Wallet ke nomor 08123456789. Total: Rp' . number_format($totalHarga));
    } else {
        return back()->with('error', 'Metode pembayaran tidak valid.');
    }
}


    // Menambahkan produk ke keranjang
    public function tambah($id)
    {
        $produk = Produk::findOrFail($id);

        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            $keranjang[$id]['jumlah']++;
        } else {
            $keranjang[$id] = [
                "id" => $produk->id,
                "nama" => $produk->nama_produk,
                "Harga" => $produk->Harga,
                "gambar" => $produk->gambar_cover,
                "jumlah" => 1
            ];
        }

        session()->put('keranjang', $keranjang);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    // Menghapus produk dari keranjang
    public function hapus($id)
    {
        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    // Mengosongkan keranjang
    public function kosongkan()
    {
        session()->forget('keranjang');
        return redirect()->back()->with('success', 'Keranjang berhasil dikosongkan.');
    }

    public function pembayaran()
{
    $keranjang = session()->get('keranjang', []);
    $totalHarga = 0;

    foreach ($keranjang as $item) {
        $totalHarga += $item['Harga'] * $item['jumlah'];
    }

    return view('keranjang.pembayaran', compact('keranjang', 'totalHarga'));
}
}
