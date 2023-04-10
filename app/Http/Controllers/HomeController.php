<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->get(['name', 'img_path']);
        return Inertia::render('Home', [
            'categories' => $categories,
            'user' => Auth::user(),
        ]);
    }
}
