<?php

namespace Database\Seeders;

use App\Models\Destinasi;
use Illuminate\Database\Seeder;

class DestinasiSeeder extends Seeder
{
    public function run()
    {
        Destinasi::create([
            'nama' => 'Monumen Tugu Pahlawan',
            'alamat' => 'Jl. Pahlawan No. 10-15',
            'id_wilayah' => '1',
            'deskripsi' => ''
        ]);

        Destinasi::create([
            'nama' => 'Makam Ampel',
            'alamat' => 'Jl. Krembangan No. 10-15',
            'id_wilayah' => '2',
            'deskripsi' => ''
        ]);

        Destinasi::create([
            'nama' => 'Pantai Ria Kenjeran',
            'alamat' => 'Jl. Kenjeran Baru No. 10-15',
            'id_wilayah' => '2',
            'deskripsi' => ''
        ]);
    }
}
