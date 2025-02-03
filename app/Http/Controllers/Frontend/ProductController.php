<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        $categories = Category::withCount('products')->get();
        return view('frontend.products.index', compact('products', 'categories'));
    }

    public function show(Product $product)
    {
        return view('frontend.products.show', compact('product'));
    }
}