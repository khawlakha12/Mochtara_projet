<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommendeController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_id' => 'required|integer',
        'size_id' => 'required|integer',
        'quantity' => 'required|integer'
    ]);

    $commande = Commande::create($validatedData);


    \Log::info('Commande Created: ', $validatedData);

    return redirect()->route('home')->with('success', 'Commande placed successfully!');
}



}
