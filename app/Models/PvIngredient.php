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
    public function getFood($id)
    {
        return;
    }
    public function Foods()
    {
        // return $this->belongsTo(Food::class);
        return $this->belongsTo('App\Models\Food', 'Food_id', 'id');
    }
    public function Ingredients()
    {
        // return $this->belongsTo(Ingredient::class);
        return $this->belongsTo('App\Models\Ingredient', 'Ingredient_ID', 'id');
    }
}
