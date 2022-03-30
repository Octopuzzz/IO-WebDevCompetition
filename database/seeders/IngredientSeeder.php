<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create([
            'image' => 'component-1.png',
            'name' => 'Kapulaga'
        ]);
        Ingredient::create([
            'image' => 'component-3.png',
            'name' => 'Kayu manis'
        ]);
        Ingredient::create([
            'image' => 'food-1.png',
            'name' => 'Kapulaga'
        ]);
    }
}
