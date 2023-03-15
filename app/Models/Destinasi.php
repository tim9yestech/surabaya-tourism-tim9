<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'deskripsi',
        'hari_operasional',
        'jam_operasional',
        'link_reservasi',
        'link_website',
        'gambar'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Kategori_Destinasi::class, 'pivot_destinasi_kategori', 'id_destinasi', 'id_kategori');
    }

    public function wilayah(): BelongsTo
    {
        return $this->belongsTo(Wilayah::class, 'id_wilayah');
    }
}
