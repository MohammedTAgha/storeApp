<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        $featuredProducts = Product::where('stock_quantity', '>', 0)->take(8)->get();
        return view('frontend.home.index', compact('categories', 'featuredProducts'));
    }


    public function myAccount()
    {
        $user = Auth::user();
        $orders = Order::with('orderItems.product')
            ->where('user_id', $user->id)
            ->latest()
            ->get();
        $user = FacadesAuth::user();
        $categories = Category::with('products')->get();
        $featuredProducts = Product::where('stock_quantity', '>', 0)->take(8)->get();
        return view('frontend.home.myaccount', compact('user','orders'));
    }
}
