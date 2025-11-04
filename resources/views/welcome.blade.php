<x-main>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- 🔍 Search Section -->
    <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="SearchTerm" placeholder="Search products..."
                value="{{ request('SearchTerm') }}" required autocomplete="off" class="searchTerm">
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- 🆕 New Arrivals -->
    <div class="tittle">
        <h2>New Arrivals</h2>
    </div>

    <div class="scroll-section">
        @foreach ($products as $product)
            @if ($product->category && strtolower($product->category->slug) === 'new')
                <div class="card">
                    <a href="{{ route('product.show', $product->id) }}" class="cardlink">
                        <img class="cardimg" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        <div class="cardinfo">
                            <div class="productname">{{ Str::limit($product->name, 60) }}</div>
                            <div class="rating">★★★★☆ <span>(230)</span></div>
                            <div class="price">Ksh {{ number_format($product->price, 2) }}</div>
                        </div>
                    </a>

                    <div class="actionbtns">
                        @auth
                            @php
                                $inCart = $cartItems->pluck('product_id')->contains($product->id);
                            @endphp

                            @if ($inCart)
                                <button class="cartbtn" disabled>In Cart</button>
                            @else
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="cartbtn">
                                        <i class="fa-solid fa-cart-plus"></i> Add to Cart
                                    </button>
                                </form>
                            @endif

                            <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="wishcartbtn"><i class="fa-solid fa-heart"></i></button>
                            </form>
                        @else
                            <a href="{{ route('auth.login') }}" class="cartbtn">Login to Buy</a>
                        @endauth
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Sponsored Products -->
    <div class="tittle">
        <h2>Sponsored Products</h2>
    </div>

    <div class="scroll-section">
        @foreach ($products as $product)
            @if ($product->category && strtolower($product->category->name) === 'sponsored products')
                <div class="card">
                    <a href="{{ route('product.show', $product->id) }}" class="cardlink">
                        <img class="cardimg" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        <div class="cardinfo">
                            <div class="productname">{{ Str::limit($product->name, 60) }}</div>
                            <div class="rating">★★★★☆ <span>(230)</span></div>
                            <div class="price">Ksh {{ number_format($product->price, 2) }}</div>
                        </div>
                    </a>
                    <div class="actionbtns">
                        <a href="{{ route('product.show', $product->id) }}" class="cartbtn">
                            View Product
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Other Products -->
    <div class="tittle">
        <h2>Other Products</h2>
    </div>

    <div class="grid-section">
        @foreach ($products as $product)
            @if ($product->category && strtolower($product->category->name) === 'others')
                <div class="card">
                    <a href="{{ route('product.show', $product->id) }}" class="cardlink">
                        <img class="cardimg" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        <div class="cardinfo">
                            <div class="productname">{{ Str::limit($product->name, 60) }}</div>
                            <div class="rating">★★★★☆ <span>(230)</span></div>
                            <div class="price">Ksh {{ number_format($product->price, 2) }}</div>
                        </div>
                    </a>

                    <div class="actionbtns">
                        <a href="{{ route('product.show', $product->id) }}" class="cartbtn">
                            View Product
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-main>
