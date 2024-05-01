<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commande;
use App\Models\Product;
use App\Models\Size;
use App\Models\Order;
use Log;
use Illuminate\Support\Facades\DB;
class CommendeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|integer',
            'size_id' => 'required|integer'
        ]);

        $product = Product::findOrFail($validatedData['product_id']);
        $size = Size::findOrFail($validatedData['size_id']);

        $commande = new Commande();
        $commande->product_id = $product->id;
        $commande->size_id = $size->id;
        $commande->user_id = Auth::id();
        $commande->save();

        \Log::info('Commande Created: ', $validatedData);

        return redirect()->route('shop.show')->with('success', 'Commande placed successfully!');
    }

    public function showCommandes()
    {
        $user = Auth::user();
        if ($user && $user->commandes) {
            return view('components.payment', ['commandes' => $user->commandes]);
        }
        abort(404);
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
public function completeCheckout($commandeId) {
    $commande = Commande::find($commandeId);
    if ($commande) {
        $commande->status = 'hidden'; 
        $commande->save();

        return redirect()->route('shop.show')->with('success', 'Checkout completed. Commande will no longer be visible to admins.');
    } else {
        return redirect()->route('shop.show')->with('error', 'Commande not found.');
    }
}

public function processCheckout(Request $request) {
    Log::debug('Request received', $request->all());

    DB::beginTransaction(); // Début de la transaction
    try {
        $validated = $request->validate([
            'email' => 'required|email',
            'input-name' => 'required|string|max:255',
            'serialCardNumber' => 'required|numeric',
            'cvv' => 'required|numeric|digits:3',
            'ExDate' => 'required|date_format:m/y|after:today',
        ]);

        Log::debug('Validation passed', $validated);
        $paymentSuccess = true;  // Implémentez ici la logique réelle de paiement

        if (!$paymentSuccess) {
            DB::rollBack(); // Annulation de la transaction
            return response()->json(['success' => false, 'message' => 'Payment processing failed. Please check your details and try again.']);
        }

        $order = new Order;
        $order->email = $validated['email'];
        $order->name = $validated['input-name'];
        $order->card_number = $validated['serialCardNumber'];
        $order->expiry_date = $validated['ExDate'];
        $order->cvv = $validated['cvv'];
        $order->status = 'processed';
        $order->save();

        if (Auth::check()) {
            $commandes = Commande::where('user_id', Auth::id())->where('status', 'invisible')->get();
            foreach ($commandes as $commande) {
                $commande->status = 'visible';
                $commande->save();
            }
        }

        DB::commit(); // Validation de la transaction

        Log::info('Order processed and commandes updated successfully.', ['order_id' => $order->id]);
        return response()->json(['success' => true, 'message' => 'Checkout successful. Orders have been updated.']);
    } catch (\Exception $e) {
        DB::rollBack(); // Annulation de la transaction en cas d'erreur
        Log::error('Error processing checkout', ['error' => $e->getMessage()]);
        return response()->json(['success' => false, 'message' => 'An error occurred: ' . $e->getMessage()]);
    }
}


public function updateStatus(Request $request, $id) {
    $commande = Commande::find($id);
    if($commande && $commande->status === 'invisible') {
        $commande->status = $request->input('status');
        $commande->save();
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false, 'error' => 'Commande not found or already visible.']);
    }
}

}


