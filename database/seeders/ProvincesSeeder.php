<?php

namespace Database\Seeders;

use App\Models\Provinces;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinces::create([
            'Name' => 'Java',
        ]);
        Provinces::create([
            'Name' => 'Padang',
        ]);
        Provinces::create([
            'Name' => 'Manado',
        ]);
        Provinces::create([
            'Name' => 'Kalimantan',
        ]);
        Provinces::create([
            'Name' => 'Papua',
        ]);
        Provinces::create([
            'Name' => 'Sumatera',
        ]);
        Provinces::create([
            'Name' => 'Sulawesi',
        ]);
    }
}
