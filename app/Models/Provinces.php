<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinces extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Food()
    {
        return $this->hasMany('App\Models\Food','Province_id');
    }
}
