<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if (!auth()->check()) { 
            abort(403);
        }
        return view('/Components.dashboard', [
            'title' => 'Dashboard',
            'user' => Auth::User(),
            'foods' => Food::all(),
        ]);
    }
}
