<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('search');
    $products = Product::where('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->get();

    // Assume you have a Blade template to format the search results
    return view('partials.productList', compact('products'))->render();
}
}
