<x-main>
    <div class="tittle" style="padding-top:40px ">
        <h2>New Arrivals</h2>
    </div>
    @if (session('info'))
        <p class="info">{{ session('info') }}</p>
    @endif
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div class="main">
    </div>
    <!-- NEW ARRIVALS -->
    <div class="newarrivalcards">
        @foreach ($products as $product)
            <div class="card">
                <img class="cardimg" src="{{ $product->image_url }}" alt="">
                <div class="cardinfo">
                    <div class="productname">{{ $product->name }}</div>
                    <div class="rating">
                        ★★★★☆ <span>(230)</span>
                    </div>
                    <div class="price">${{ $product->price }}</div>
                    @auth
                        <div class="actionbtns">
                            @if ($cartItems->contains('product_id', $product->id))
                                <button style="background-color:gray; border: black; " class="cartbtn" disabled>In
                                    Cart</button>
                            @else
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="cartbtn">Add to Cart</button>
                                </form>
                            @endif
                            <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="wishcartbtn"><i class="fa-solid fa-heart"></i></button>

                            </form>

                        </div>

                    @endauth


                </div>
            </div>
        @endforeach
    </div>
    <div class="tittle">
        <h2>Sponsored products</h2>
    </div>

    <!-- Sponsored products -->
    <div class="newarrivalcards">
        @foreach ($products as $product)
            <div class="card">
                <img class="cardimg" src="{{ $product->image_url }}" alt="">
                <div class="cardinfo">
                    <div class="productname">{{ $product->name }}</div>
                    <div class="rating">
                        ★★★★☆ <span>(230)</span>
                    </div>
                    <div class="price">${{ $product->price }}</div>
                    @auth
                        <div class="actionbtns">

                            @if ($cartItems->contains('product_id', $product->id))
                                <button style="background-color:gray; border: black; " class="cartbtn" disabled> in
                                    Cart</button>
                            @else
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="cartbtn">Add to Cart</button>
                                </form>
                            @endif



                            <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="wishcartbtn"><i class="fa-solid fa-heart"></i></button>

                            </form>

                        </div>

                    @endauth

                </div>
            </div>
        @endforeach
    </div>

    <div class="others">
        @foreach ($products as $product)
            <div class="card">
                <img class="cardimg" src="{{ $product->image_url }}" alt="">
                <div class="cardinfo">
                    <div class="productname">{{ $product->name }}</div>
                    <div class="rating">
                        ★★★★☆ <span>(230)</span>
                    </div>
                    <div class="price">${{ $product->price }}</div>
                    @auth
                        <div class="actionbtns">
                            @if ($cartItems->contains('product_id', $product->id))
                                <button style="background-color:gray; border: black; " class="cartbtn" disabled>in
                                    Cart</button>
                            @else
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="cartbtn">Add to Cart</button>
                                </form>
                            @endif
                            <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="wishcartbtn"><i class="fa-solid fa-heart"></i></button>

                            </form>

                        </div>
                    @endauth

                </div>
            </div>
        @endforeach
    </div>


</x-main>
