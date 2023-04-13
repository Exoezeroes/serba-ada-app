<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function show(String $slug)
    {
        $category = Category::query()
            ->where('slug', $slug)
            ->first();

        return Inertia::render('CategoryProduct', [
            'category' => $category,
        ]);
    }
}
