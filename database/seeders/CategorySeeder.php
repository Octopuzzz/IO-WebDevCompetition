<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'category_type' => 'Sayuran'
        ]);
        Categories::create([
            'category_type' => 'Buah - Buahan'
        ]);
        Categories::create([
            'category_type' => 'Junk Foods'
        ]);
    }
}
