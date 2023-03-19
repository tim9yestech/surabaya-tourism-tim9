<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'legalitas',
        'deskripi',
        'alamat_outlet',
        'id_wilayah',
        'link_webproduk',
        'gambar'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function wilayah(): BelongsTo
    {
        return $this->belongsTo(Wilayah::class, 'id_wilayah');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Kategori_ProdukUMKM::class,'pivot_produk_kategori', 'id_produkumkm', 'id_kategori');
    }

}
