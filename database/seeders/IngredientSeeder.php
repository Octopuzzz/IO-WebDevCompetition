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
            'image' => 'Biji-salak.jpg',
            'name' => 'Biji Salak'
        ]);
        Ingredient::create([
            'image' => 'Kayu-Manis.jpg',
            'name' => 'Kayu manis'
        ]);
        Ingredient::create([
            'image' => 'Bawang-Putih.jpg',
            'name' => 'Bawang Putih'
        ]);
        Ingredient::create([
            'image' => 'Kapulaga.jpg',
            'name' => 'Kapulaga'
        ]);
        Ingredient::create([
            'image' => 'Cabe.jpg',
            'name' => 'Cabai'
        ]);
        Ingredient::create([
            'image' => 'Daging-Sapi.jpg',
            'name' => 'Daging'
        ]);
        Ingredient::create([
            'image' => 'Daun-Salam.jpeg',
            'name' => 'Daun Salam'
        ]);
        Ingredient::create([
            'image' => 'kerupuk.jpg',
            'name' => 'Kerupuk'
        ]);
        Ingredient::create([
            'image' => 'ketumbar.jpeg',
            'name' => 'Ketumbar'
        ]);
        Ingredient::create([
            'image' => 'ketupat.jpeg',
            'name' => 'Ketupat'
        ]);
        Ingredient::create([
            'image' => 'kol.jpeg',
            'name' => 'Kol'
        ]);
        Ingredient::create([
            'image' => 'tomat.jpg',
            'name' => 'Tomat'
        ]);
        Ingredient::create([
            'image' => 'sawi.jpg',
            'name' => 'Sawi'
        ]);
        Ingredient::create([
            'image' => 'Serai.jpg',
            'name' => 'Serai'
        ]);
        Ingredient::create([
            'image' => 'telur.jpg',
            'name' => 'Telur'
        ]);
        Ingredient::create([
            'image' => 'Jahe.jpg',
            'name' => 'Jahe'
        ]);
        Ingredient::create([
            'image' => 'Bawang-Merah.jpg',
            'name' => 'Bawang Merah'
        ]);
        Ingredient::create([
            'image' => 'Kacang-Panjang.jpg',
            'name' => 'Kacang Panjang'
        ]);
        Ingredient::create([
            'image' => 'Toge.jpg',
            'name' => 'Toge'
        ]);
        Ingredient::create([
            'image' => 'Kelapa.jpg',
            'name' => 'Kelapa'
        ]);
        Ingredient::create([
            'image' => 'Kecipir.jpg',
            'name' => 'Kecipir'
        ]);
    }
}
