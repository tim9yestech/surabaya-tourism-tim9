<?php

namespace Database\Seeders;

use App\Models\Wilayah;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        Wilayah::create([
            'nama_wilayah' => 'Surabaya Pusat'
        ]);

        Wilayah::create([
            'nama_wilayah' => 'Surabaya Utara'
        ]);

        Wilayah::create([
            'nama_wilayah' => 'Surabaya Timur'
        ]);

        Wilayah::create([
            'nama_wilayah' => 'Surabaya Selatan'
        ]);

        Wilayah::create([
            'nama_wilayah' => 'Surabaya Barat'
        ]);
    }
}
