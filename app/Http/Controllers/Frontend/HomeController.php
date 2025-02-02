<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        $featuredProducts = Product::where('stock_quantity', '>', 0)->take(8)->get();
        return view('frontend.home.index', compact('categories', 'featuredProducts'));
    }
}
