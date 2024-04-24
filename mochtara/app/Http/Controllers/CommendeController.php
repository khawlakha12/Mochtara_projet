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
    
        return redirect()->route('shop.show')->with('success', 'Commande placed successfully!');
    }
    
    public function showCommandes() {
        $commandes = Commande::with('product')->get();
        \Log::info('Commandes data:', ['data' => $commandes]);
        return view('components.payment', compact('commandes'));
    }
public function showShop() {
    $commandes = Commande::with('product')->get(); 
    return view('pages.shop', compact('commandes'));
}


}
