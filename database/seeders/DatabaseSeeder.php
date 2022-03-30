<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FoodSeeder;
use Database\Seeders\LikeSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HistorySeeder;
use Database\Seeders\BookmarkSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProvincesSeeder;
use Database\Seeders\IngredientSeeder;
use Database\Seeders\PvIngredientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            FoodSeeder::class,
            CategorySeeder::class,
            PvIngredientSeeder::class,
            IngredientSeeder::class,
            HistorySeeder::class,
            LikeSeeder::class,
            BookmarkSeeder::class,
            ProvincesSeeder::class,
        ]);
    }
}
