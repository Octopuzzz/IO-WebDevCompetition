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
    // public function scopeFilter($query, array $filter)
    // {
    //     $query->when($filter['search'] ?? false, function ($query, $search) {
    //         return $query->where('Food_Name', 'like', '%' . $search . '%')
    //             ->orWhere('Food_Excerpt', 'like', '%' . $search . '%');
    //     });
    //     $query->when(
    //         $filter['search'] ?? false,
    //         fn ($query, $search) =>
    //         $query->where('Food_Name', $search)
    //             ->orWhere('Food_Excerpt', $search)
    //     );
    // }
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
