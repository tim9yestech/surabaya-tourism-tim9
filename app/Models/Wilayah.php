<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $fillable = ['nama_wilayah'];
    protected $dates = ['created_at', 'updated_at'];

    public function desinations()
    {
        return $this->hasMany(Destinasi::class, 'id_wilayah');
    }
}
