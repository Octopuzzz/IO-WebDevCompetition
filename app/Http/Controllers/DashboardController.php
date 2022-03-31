<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        if ($request->has('search')) {
            $food = Food::where('Food_Name', 'like', '%' . $request->search . '%')
                ->orWhere('Food_Excerpt', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $food = Food::latest()->get();
        }
        return view('/Components.dashboard', [
            'title' => 'Dashboard',
            'user' => Auth::User(),
            'foods' => $food,
            'Categories' => Provinces::all(),
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
