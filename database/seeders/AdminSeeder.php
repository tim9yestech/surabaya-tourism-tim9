<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Mas Administrator',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name' => 'Mbak Contributor',
            'email' => 'contributor@contributor.com',
            'role' => 'contributor',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name' => 'Nurul Maghfiroh',
            'email' => 'maghfiroh@admin.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'name' => 'Rengga Adistyan',
            'email' => 'radistyano@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);
    }
}
