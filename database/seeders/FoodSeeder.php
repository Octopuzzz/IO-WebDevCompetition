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
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'Recipes_Excerpt' => '<ul><li>1 ikat daun melinjo</li></ul>',
            'Recipes' => '<ul>
            <li>1 ikat daun melinjo</li>
            <li>2 ikat daun melinjo</li>
            <li>3 ikat daun melinjo</li>
            <li>6 ikat daun melinjo</li>
            </ul>',
            'image' => Hash::make('component-1.png'),
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => Hash::make('component-2.png'),
            'Rating' => '4,5',
            'Total_Rating' => '978',
        ]);
        Food::create([
            'category_id' => 2,
            'Food_Name' => 'Bayam kalimantan',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'Recipes_Excerpt' => '<ul><li>5 ikat daun pandan</li></ul>',
            'Recipes' => '<ul>
            <li>1 ikat daun melinjo</li>
            <li>2 ikat daun melinjo</li>
            <li>3 ikat daun melinjo</li>
            <li>6 ikat daun melinjo</li>
            </ul>',
            'image' => Hash::make('component-3.png'),
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => Hash::make('component-2.png'),
            'Rating' => '4,7',
            'Total_Rating' => '278',
        ]);
    }
}
