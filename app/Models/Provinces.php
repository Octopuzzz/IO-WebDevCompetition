<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Food()
    {
        return $this->hasOne(Food::class);
    }
}
