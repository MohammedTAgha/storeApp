<?php

namespace App\Http\Controllers\Frontend;

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->with('orderItems.product')->paginate(10);
        return view('frontend.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $cart = auth()->user()->cart;

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $order = auth()->user()->orders()->create([
            'total_amount' => $cart->totalAmount(),
            'status' => 'pending',
            'shipping_address' => $request->shipping_address,
        ]);

        foreach ($cart->cartItems as $cartItem) {
            $order->orderItems()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        $cart->cartItems()->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    public function show(Order $order)
    {
        $order->load('orderItems.product');
        return view('frontend.orders.show', compact('order'));
    }
}
