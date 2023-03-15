<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
