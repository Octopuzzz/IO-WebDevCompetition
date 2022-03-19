<?php

namespace App\Models;

use App\Models\PvIngredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;
    public function PvIngredient()
    {
        return $this->belongsTo(PvIngredient::class);
    }
}
