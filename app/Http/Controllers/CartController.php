<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        // $cart = session()->get('cart');
        $cart = Session::get('cart', []);

        if (!$cart) {
            $cart = [];
        }
        Log::info('Cart contents: ', $cart);
        return view('frontend.cartpage',compact('cart'));
    }

//     public function addToCart(Request $request)
// {
//     $product = Product::find($request->id);

//     if (!$product) {
//         return response()->json(['message' => 'product not found'], 404);
//     }


//     $cart = Session::get('cart', []);

//     if (isset($cart[$request->id])) {
//         // Update the quantity if the product is already in the cart
//         $cart[$request->id]['quantity'] += $request->quantity;
//     } else {
//         $cart[$request->id] = [
//             'product_id' => $product->product_id,
//             'image'=>$product->image,
//             'name' => $product->name,
//             'price' => $product->price,
//             'quantity' => $request->quantity,
//         ];
//     }

//     Session::put('cart', $cart);

//     return response()->json(['message' => 'product added to cart successfully!']);
// }
public function addToCart(Request $request)
{
    $product = Product::find($request->id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    $cart = Session::get('cart', []);

    if (isset($cart[$request->id])) {
        // If the product is already in the cart, don't increase quantity
        $cart[$request->id]['quantity'] += $request->quantity;
        return response()->json(['message' => 'Product is already in the cart!']);
    } else {
        // Add new product to the cart with a default quantity of 1
        $cart[$request->id] = [
            'product_id' => $product->product_id,
            'image' => $product->image,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,

        ];
    }

    // Store updated cart in session
    Session::put('cart', $cart);

    return response()->json(['message' => 'Product added to cart successfully!']);
}

public function removeFromCart(Request $request)
{
    $id = $request->id; // Get the product ID from the request
    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        Session::put('cart', $cart);
        return response()->json(['success' => 'Item removed from the cart successfully!']);
    }

    return response()->json(['message' => 'Item not found in cart'], 404);
}

public function clearCart()
    {
        // Clear the entire cart from the session
        Session::forget('cart');
        return response()->json(['success' => 'Cart cleared successfully!']);
    }


}
