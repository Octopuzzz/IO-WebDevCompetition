<?php

namespace App\Models;

use App\Models\Like;
use App\Models\History;
use App\Models\Bookmark;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function province()
    {
        return $this->belongsTo('App\Models\Provinces', 'Province_id', 'id');
    }
    public function PvIngredients()
    {
        return $this->hasMany('App\Models\PvIngredient', 'Food_id');
    }
    public function Category()
    {
        return $this->belongsTo(Categories::class);
    }
    public function Like()
    {
        return $this->belongsTo(Like::class);
    }
    public function History()
    {
        return $this->hasMany(History::class);
    }
    public function Bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
