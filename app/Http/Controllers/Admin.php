<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{
    Public function Login()
    {
        return view('AdminDash/Login');
    }
     public function loginRequest(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/Admin/Dash');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    Public function Dash()
    {
        return view('AdminDash/Dash');
    }
    Public function AddPlans()
    {
        return view('AdminDash/AddPlans');
    }
}
