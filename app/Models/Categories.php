<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Foods()
    {
        return $this->hasMany(Food::class);
    }
}
