<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\PvIngredient;
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
        ]);
    }
    public function dashboard_detail()
    {
        return view('/Components.detail', [
            'title' => "Detail"
        ]);
    }
}
