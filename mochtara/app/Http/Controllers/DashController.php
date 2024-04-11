<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Design;
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
public function addCategory(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image',
        'sizes' => 'required|array',
        'colors' => 'required|array',
    ]);

    $path = $request->file('image') ? $request->file('image')->store('categories', 'public') : null;

    $category = Category::create([
        'name' => $request->name,
        'image' => $path,
        'sizes' => json_encode($request->sizes),
        'colors' => json_encode($request->colors),
    ]);

    return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
}
public function ShowCategorie()
{
    $categories = Category::all(); 

    return view('pages.Admin.Categorie', compact('categories'));
}
public function deleteCategory(Category $category)
{
    $category->delete();

    return back()->with('success', 'Catégorie supprimée avec succès.');
}
// -----------------------------designs------------------------------ //
public function store(Request $request)
{
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('designs', 'public');
        Design::create([
            'img' => $path
        ]);
        return back()->with('success', 'Design saved successfully.');
    } else {
        return back()->with('error', 'No image was uploaded.');
    }
}
}
