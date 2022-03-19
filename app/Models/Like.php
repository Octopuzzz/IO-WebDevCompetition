<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Users()
    {
        return $this->belongsTo(User::class);
    }
    public function Foods()
    {
        return $this->belongsTo(Food::class);
    }
}
