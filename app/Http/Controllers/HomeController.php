<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->paginate(8);

        return view('home', compact('categories', 'products'));
        // return view('home', ['categories' => $categories, 'products' => $products]);
        // return view('home');

    }
}
