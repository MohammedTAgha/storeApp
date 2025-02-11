<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $orders= Order::all();
        $ordersSum = 0;
        foreach ($orders as $order) {
            $ordersSum = $ordersSum + $order->calculateTotalPrice();
        }
        // dd($ordersSum);
        $totalOrdersItems = OrderItem::count();
        $totalUsers = User::where('role', 'customer')->count();
        $recentOrders = Order::latest()->take(5)->get();
        $products = Product::with('category')->paginate(10);

        return view('admin.dashboard', compact('totalProducts', 'totalOrders', 'totalUsers', 'recentOrders','products','totalOrders','ordersSum'));
    }
}
