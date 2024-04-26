<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{

    public function showRegistrationForm()
    {
        return view('pages.Auth.register'); 
    }

    public function register(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'gender' => 'required|string',
    ]);

    $user = User::create([
        'name' => $request->first_name . ' ' . $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'gender' => $request->gender == 'femal' ? 'female' : $request->gender,
    ]);

    return redirect()->route('login')->with('success', 'Registration successful.');
}
}
