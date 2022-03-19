<?php

namespace App\Models;

use App\Models\Food;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PvIngredient extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Foods()
    {
        return $this->hasOne(Food::class);
    }
    public function Ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
