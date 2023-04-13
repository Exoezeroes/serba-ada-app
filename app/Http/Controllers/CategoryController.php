<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function show(String $slug)
    {
        $category = Category::query()
            ->where('slug', $slug)
            ->first();
        
        $products = Product::query()
            ->where('category_id', $category->id)
            ->get();

        return Inertia::render('CategoryProduct', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
