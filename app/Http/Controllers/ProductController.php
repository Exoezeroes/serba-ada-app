<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // check if q exists
        if ($request->has('q')) {
            $products = Product::query()
                ->where('title', 'like', '%' . $request->input('q') . '%')
                ->get();
        } else {
            $products = Product::all();
        }

        return Inertia::render('SearchProduct', [
            'products' => $products,
        ]);
    }
}
