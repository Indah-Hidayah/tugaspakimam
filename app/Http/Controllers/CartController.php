<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\produk;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, $productId)
    {
        $product = produk::findOrFail($productId);
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)
                    ->where('product_id', $productId)
                    ->first();

        if ($cart) {
            // Update quantity if already in cart
            $cart->quantity += $request->input('quantity', 1);
            $cart->save();
        } else {
            // Add new item to cart
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => $request->input('quantity', 1),
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with('product')->get();

        return view('cart.index', compact('carts'));
    }
}
