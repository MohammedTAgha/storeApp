<?php

namespace App\Http\Controllers\Frontend;
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function index()
    // {
    //     // $cart = auth()->user()->cart;
    //     return view('frontend.cart.index', compact('cart'));
    // }
    public function index()
    {
        $user = Auth::user();
 
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
 
        $cartItems = $cart->cartItems()->with('product')->get();
        // dd($cartItems);
        return view('frontend.cart.index', compact('cartItems', 'cart'));
    }
 
    public function store(Request $request, Product $product)
    {
        $user = Auth::user();
        // Retrieve (or create) the user's cart.
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Validate the incoming quantity (defaulting to 1 if not provided).
        $request->validate([
            'quantity' => 'nullable|integer|min:1'
        ]);
        $quantity = $request->input('quantity', 1);

        // Check if the product is already in the cart.
        $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();

        if ($cartItem) {
            // Increment the quantity.
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Create a new cart item.
            $cart->cartItems()->create([
                'product_id' => $product->id,
                'quantity'   => $quantity,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $user = Auth::user();

        // Ensure the cart item belongs to the current user's cart.
        if ($cartItem->cart->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem->update([
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }

    public function destroy(CartItem $cartItem)
    {
        $user = Auth::user();

        // Ensure the cart item belongs to the current user's cart.
        if ($cartItem->cart->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }
}