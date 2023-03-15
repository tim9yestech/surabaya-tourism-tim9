<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Destinasi extends Model
{
    use HasFactory;

    protected $fillable = ['kategori'];
    protected $dates = ['created_at'];
}
