<x-main :cartcount="$cartcount">
    <link rel="stylesheet" href="{{ asset('css/productdetails.css') }}">

    <div class="product-page">
        <div class="product-left">
            <div class="main-image">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
            </div>
        </div>

        <div class="product-middle">
            <h1 class="product-title">{{ $product->name }}</h1>
            <div class="product-rating">★★★★☆ <span>(134 ratings)</span></div>

            <div class="divider"></div>

            <div class="product-price">
                <span class="currency">KSh</span> {{ number_format($product->price, 2) }}
            </div>

            <div class="product-description">
                {{ $product->description }}
            </div>
        </div>

        <div class="product-right">
            <div class="purchase-card">
                <div class="price-box">
                    <span class="price">KSh {{ number_format($product->price, 2) }}</span>
                    <p class="stock">In Stock</p>
                </div>

                @auth
                    @if ($cartItems->contains('product_id', $product->id))
                        <button class="add-to-cart" disabled>In Cart</button>
                    @else
                        <div class="action-buttons">
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button type="submit" class="add-to-cart">
                                    <i class="fa-solid fa-cart-plus"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    @endif
                    <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button class="buy-now">
                            <i class="fa-solid fa-heart"></i> Add to Wishlist
                        </button>
                    </form>
                @endauth

                <div class="delivery-info">
                    <p>Ships from <strong>Maison</strong></p>
                    <p>Sold by <strong>{{ $product->seller ?? 'Maison Lume' }}</strong></p>
                    <p>{{ $cartcount }}</p>
                </div>
            </div>
        </div>
    </div>
</x-main>
