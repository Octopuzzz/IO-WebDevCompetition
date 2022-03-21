<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Reagent',
            'last_name' => 'Sandra',
            'email' => 'IC_Food@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
