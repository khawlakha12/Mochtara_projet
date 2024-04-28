<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.Auth.login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Les informations de connexion fournies ne correspondent pas à nos enregistrements.',
        ])->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}