<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->get(['name', 'description', 'slug', 'img_path']);
        return Inertia::render('Home', [
            'categories' => $categories,
        ]);
    }

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
