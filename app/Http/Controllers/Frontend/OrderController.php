<?php

namespace App\Http\Controllers\Frontend;

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Services\OrderExportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::with('orderItems.product')
            ->where('user_id', $user->id)
            ->latest()
            ->get();
        // dd($orders);
        return view('frontend.orders.index', compact('orders'));
    }

    public function checkout()
    {
        $user = Auth::user();
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
        $cartItems = $cart->cartItems()->with('product')->get();
        return view('frontend.orders.checkout',compact('cart','cartItems'));
    }

    // public function store(Request $request)
    // {
    //     $cart = auth()->user()->cart;

    //     if (!$cart || $cart->cartItems->isEmpty()) {
    //         return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
    //     }

    //     $order = auth()->user()->orders()->create([
    //         'total_amount' => $cart->totalAmount(),
    //         'status' => 'pending',
    //         'shipping_address' => $request->shipping_address,
    //     ]);

    //     foreach ($cart->cartItems as $cartItem) {
    //         $order->orderItems()->create([
    //             'product_id' => $cartItem->product_id,
    //             'quantity' => $cartItem->quantity,
    //             'price' => $cartItem->product->price,
    //         ]);
    //     }

    //     $cart->cartItems()->delete();

    //     return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    // }

    public function store(Request $request)
    {
        $user = Auth::user();
        // Retrieve (or create) the user's cart.
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
        $cartItems = $cart->cartItems()->with('product')->get();
        Log::alert('cartItems');
        Log::alert($cartItems);
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

         $request->validate([
            'shipping_address' => 'nullable|string'
        ]);

        // Calculate the total order amount.
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }

         DB::beginTransaction();
        try {
            // Create the order.
            $order = Order::create([
                'user_id'          => $user->id,
                'total_amount'     => $total,
                'status'           => 'pending', 
                // 'shipping_address' => $request->input('shipping_address'),
            ]);

 
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id'   => $order->id,
                    'product_id' => $item->product_id,
                    'quantity'   => $item->quantity,
                    'price'      => $item->product->price,
                ]);

 
                $item->product->decrement('stock_quantity', $item->quantity);
            }

            // Clear cart
            $cart->cartItems()->delete();

            DB::commit();

            return redirect()->route('orders.show', $order->id)
                ->with('success', 'Order placed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart.index')
                ->with('error', 'Failed to place order. '.$e->getMessage());
        }
    }
    // public function show(Order $order)
    // {
    //     $order->load('orderItems.product');
    //     return view('frontend.orders.show', compact('order'));
    // }

    public function show(Order $order)
    {
        $user = Auth::user();

 
        if ($order->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $order->load('orderItems.product');

        return view('frontend.orders.show', compact('order'));
    }


    public function downloadOrdersExcel(OrderExportService $exportService)
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->latest()->get();

        return $exportService->exportOrders($orders);
    }

    
    public function downloadOrderExcel(Order $order, OrderExportService $exportService)
    {
        $user = Auth::user();
        if ($order->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        return $exportService->exportOrderDetails($order);
    }
}
