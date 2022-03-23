<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory;
    public function Foods()
    {
        return $this->belongsTo(Food::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
