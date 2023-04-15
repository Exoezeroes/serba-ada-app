<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // get the q parameter
        $q = $request->input('q');

        // search for %q%
        $products = Product::query()
            ->where('title', 'like', '%' . $q . '%')
            ->get();
            
        return Inertia::render('SearchProduct', [
            'q' => $q,
            'products' => $products,
        ]);
    }
}
