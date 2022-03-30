<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function index()
    {
        return view('/Components.about', [
            'title' => 'IC Food',
            'foods' => Food::all(),
            'lates' => Food::latest()->get(),
            'count' => 1,
        ]);
    }
}
