<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function showUsers()
{
    $users = User::all(); 
    return view('pages.Admin.tables', ['users' => $users]); 
}

}
