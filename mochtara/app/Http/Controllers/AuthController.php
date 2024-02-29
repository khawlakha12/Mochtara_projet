<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function SignIn()
{
    return view('pages.Auth.SignIn');
}
public function register(Request $request)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->route('SignIn')->with('success', 'Your account has been created successfully. Please log in.');
}
public function signinPost(Request $request)
{
    $data = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($data)) {           
       return redirect('/home')->with('success', 'Good job');
    }

       return back()->with('error', 'Email or password is not correct');
}
}

