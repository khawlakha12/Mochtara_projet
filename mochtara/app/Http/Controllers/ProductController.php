<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|int',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'sizes' => 'required|array', 
            'sizes.*' => 'exists:sizes,id'
        ]);

        $path = $request->hasFile('image') ? $request->file('image')->store('products', 'public') : null;

        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $path,
        ]);
        $product->sizes()->sync($request->sizes);
        return back()->with('success', 'Product added successfully.');
    }

    public function showProducts()
    {
        $products = Product::all();
        $sizes = Size::all();
        $products = Product::with('sizes')->get();

        return view('pages.Admin.product', compact('products', 'sizes'));
    }

    public function update(Request $request, $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'sizes' => 'required|array',
        'sizes.*' => 'exists:sizes,id'
    ]);

    $product = Product::findOrFail($product);
    $product->name = $request->name;
    $product->sizes()->sync($request->sizes); 

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
