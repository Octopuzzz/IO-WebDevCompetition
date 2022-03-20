<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {

        return view('/Components.dashboard', [
            'title' => 'Dashboard',
            'user' => Auth::User(),
        ]);
    }
}
