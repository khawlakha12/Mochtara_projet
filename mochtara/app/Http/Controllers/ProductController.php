<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|int',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $path = $request->hasFile('image') ? $request->file('image')->store('products', 'public') : null;

        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $path,
        ]);

        return back()->with('success', 'Product added successfully.');
    }

    public function showProducts()
    {
        $products = Product::all();

        return view('pages.Admin.product', compact('products'));
    }

    public function update(Request $request, $product)
{
    $product = Product::findOrFail($product);
    $product->name = $request->name;
    $product->save();

    return response()->json(['message' => 'Product updated successfully!']);
}


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('showProducts')->with('success', 'Product deleted successfully.');
    }

}
