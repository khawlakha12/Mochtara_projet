<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Design;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashController extends Controller
{
    public function showUsers()
    {
        $users = User::all(); 
        \Log::info($users);

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
public function deleteCategory($id)
    {
        $category = Category::findOrFail($id); 
        $category->delete();

        return redirect()->route('categorie')->with('success', 'Category deleted successfully.');
        
    }

// -----------------------------designs------------------------------ //
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image' => 'required|image'
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('designs', 'public');
        Design::create([
            'img' => $path,
            'name' => $request->name,
            'price' => $request->price
        ]);

        return back()->with('success', 'Design saved successfully.');
    } else {
        return back()->with('error', 'No image was uploaded.');
    }
}
public function show_design()
    {
        $designs = Design::all();
        return view('pages.Art_designer.Cate_art', compact('designs')); 
    }
    public function destroy_design($id)
    {
        $design = Design::findOrFail($id);
        $design->delete();
    
        return back()->with('success', 'Design successfully deleted.');
    }


    public function showRole()
{
    
    return view('pages.Admin.tables', compact('roles'));
}

    
}
