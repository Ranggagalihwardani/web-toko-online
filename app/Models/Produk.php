<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        "kategori_id",
        "nama_produk",
        "konten_produk",
        "gambar_cover",
        "Harga",
        "lampiran"
    ];

    public function kategori(): BelongsTo
    {
        return $this->BelongsTo(KategoriProduk::class);
    }
}

