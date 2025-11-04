<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{


    public function addToCart(Request $request)
    {
        $data =  $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $exists = Cart::where('product_id', $data['product_id'])->exists();
        Cart::create($data);
        return back()->with('success', 'Product added to Cart!');
    }


    public function cartindex()
    {
        $userId = Auth::id();
        $cartItems = Cart::get()->where('user_id', $userId);
        return view('cart.index', compact('cartItems', ));
    }


    public function update(Request $request, $id)
    {
        $quantity = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        $cartItem = Cart::findOrFail($id);
        $cartItem->update($quantity);

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }



    public function checkout() {
    $cartItems = Cart::where('user_id', auth()->id())->get();
    return view('cart.checkout', compact('cartItems'));
}

}
