<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {

        return view('/Components.dashboard', [
            'title' => 'Dashboard',
            'user' => Auth::User(),
            'foods' => Food::all(),
        ]);
    }
    public function dashboard_detail()
    {
        return view('/Components.detail', [
            'title' => "Detail"
        ]);
    }
}
