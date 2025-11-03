<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        $data =  $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $exists = Wishlist::where('product_id', $data['product_id'])->exists();

        if ($exists) {
            return back()->with('info', 'Product is already in your wishlist!');
        }


        Wishlist::create($data);
        return back()->with('success', 'Product added to wishlist!');
    }


    public function index(){
        $user = Auth::user()->id;
        $wishItems = Wishlist::where('user_id',$user)->get();

        return view('wishlist.index',compact('wishItems'));
    }

    public function remove($id){
        $item = Wishlist::findOrFail($id);
        $item->delete();
        return redirect(route('wishlist.index'))->with('Success','Item removed successfully from Wishlist');
    }
}
