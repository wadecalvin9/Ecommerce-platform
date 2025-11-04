<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use App\Models\Wishlist;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cartcount = 0;
            $wishcount = 0;
            $cartItems = collect();
            $wishItems = collect();

            if (auth()->check()) {
                $cartItems = Cart::where('user_id', auth()->id())->get();
                $wishItems = Wishlist::where('user_id', auth()->id())->get();
                $cartcount = $cartItems->count();
                $wishcount = $wishItems->count();
            }

            $view->with(compact('cartItems', 'cartcount','wishcount'));
        });
    }
}
