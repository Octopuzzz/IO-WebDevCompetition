<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::create([
            'name' => 'Reagent',
            'email' => 'IC_Food@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // Food::create([
        //     'categoryID'
        // ]);
    }
}
