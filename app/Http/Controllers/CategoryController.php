<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Create a category
     */
    public function create()
    {
        return Inertia::render('Category/Add');
    }
}
