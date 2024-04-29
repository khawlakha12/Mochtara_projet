<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande;
use App\Models\Product;
use App\Models\Size;

class CommendeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|integer',
            'size_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $product = Product::findOrFail($validatedData['product_id']);
        $size = Size::findOrFail($validatedData['size_id']);

        $commande = new Commande();
        $commande->product_id = $product->id;
        $commande->size_id = $size->id;
        $commande->quantity = $validatedData['quantity'];
        $commande->user_id = Auth::id();
        $commande->save();

        \Log::info('Commande Created: ', $validatedData);

        return redirect()->route('shop.show')->with('success', 'Commande placed successfully!');
    }

    public function showCommandes() {
        $userId = Auth::id(); 
        $commandes = Commande::where('user_id', $userId)->with('product')->get();
        \Log::info('Commandes data:', ['data' => $commandes]);
        return view('components.payment', compact('commandes'));
    }
public function showShop() {
    $commandes = Commande::with('product')->get(); 
    return view('pages.shop', compact('commandes'));
}

public function deleteCommande($id) {
    $commande = Commande::find($id);
    if ($commande) {
        $commande->delete();
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false, 'error' => 'Commande not found']);
    }
}

}
