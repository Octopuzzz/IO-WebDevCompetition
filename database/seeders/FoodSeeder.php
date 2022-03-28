<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Sayur Babanci',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officia provident tenetur, unde consequatur soluta commodi porro sapiente eos optio sit rerum nihil, eligendi aspernatur voluptates?',
            'Recipes_Excerpt' => '1 ikat daun melinjo',
            'Recipes' => '<ul>
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'food-1.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 85,
            'Rating' => '4,5',
            'Total_Rating' => '978',
        ]);
        Food::create([
            'category_id' => 2,
            'Food_Name' => 'Bayam kalimantan',
            'Food_Excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '<ul>
            <li>1 ikat daun melinjo</li>
            <li>2 ikat daun melinjo</li>
            <li>3 ikat daun melinjo</li>
            <li>6 ikat daun melinjo</li>
            </ul>',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4,7',
            'Total_Rating' => '278',
        ]);
    }
}
