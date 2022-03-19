<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookmark extends Model
{
    use HasFactory;
    public function Food()
    {
        return $this->belongsTo(Food::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
