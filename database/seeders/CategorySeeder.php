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
            'category_type' => 'Sayuran',
            'slug' => 'sayuran'
        ]);
        Categories::create([
            'category_type' => 'Buah - Buahan',
            'slug' => 'buah-buahan'
        ]);
        Categories::create([
            'category_type' => 'Junk Foods',
            'slug' => 'junk-foods'
        ]);
    }
}
