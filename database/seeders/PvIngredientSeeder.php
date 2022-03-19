<?php

namespace Database\Seeders;

use App\Models\PvIngredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PvIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PvIngredient::create([
            'Food_id' => 2,
        ]);
    }
}
