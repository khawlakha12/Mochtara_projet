<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashController extends Controller
{
    public function showUsers()
{
    $users = User::all(); 
    return view('pages.Admin.tables', ['users' => $users]); 
}
public function deleteUser($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return Redirect::back()->with('success', 'Utilisateur supprimé avec succès.');
}
}
