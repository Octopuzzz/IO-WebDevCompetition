<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        return view('/Components.register', [
            'status' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'  => 'required',
            'email' => 'required|email:dns,rfc|unique:users',
            'password' => 'required|confirmed'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('/')->with('Registered', 'Register Successful !');
    }
}
