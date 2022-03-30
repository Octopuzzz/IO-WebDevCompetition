<?php

namespace App\Models;

use App\Models\PvIngredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function PvIngredient()
    {
        // return $this->hasMany(PvIngredient::class);
        return $this->hasMany('App\Models\PvIngredient', 'Ingredient_ID');
    }
}
