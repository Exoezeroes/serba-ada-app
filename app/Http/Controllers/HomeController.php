<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->get(['name', 'img_path']);

        return Inertia::render('Home', [
            'categories' => $categories,
        ]);
    }   

    public function store(Request $request)
    {
        $category = $request->validate(['name' => ['required']]);

        Category::create($category);

        return Redirect::route('home.index');
    }
}
