<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Food;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('/Components.dashboard', [
            'title' => 'Dashboard',
            'user' => Auth::User(),
            'foods' => Food::latest()->get(),
            'Categories' => Categories::all(),
        ]);
    }
    public function dashboard_detail(Food $Food)
    {
        return view('/Components.detail', [
            'title' => "Detail",
            'detail' => $Food,
        ]);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
