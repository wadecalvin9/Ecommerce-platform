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
        @foreach ($products as $product )
        <div class="card">
            <img class="cardimg" src="{{ $product->image_url }}"
                alt="">
            <div class="cardinfo">
                <div class="productname">{{ $product->name }}</div>
                <div class="rating">
                    ★★★★☆ <span>(230)</span>
                </div>
                <div class="price">${{ $product->price }}</div>
                <div class="actionbtns">
                    <a href="" class="cartbtn">Add to Cart</a>
                    <form action="{{ route('wishlist.add',$product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button class="wishcartbtn"><i class="fa-solid fa-heart"></i></button>

                    </form>

                </div>

            </div>
        </div>
        @endforeach
        </div>
    <div class="tittle">
        <h2>Sponsored products</h2>
    </div>

    <!-- Sponsored products -->
    <div class="newarrivalcards">
         @foreach ($products as $product )
        <div class="card">
            <img class="cardimg" src="{{ $product->image_url }}"
                alt="">
            <div class="cardinfo">
                <div class="productname">{{ $product->name }}</div>
                <div class="rating">
                    ★★★★☆ <span>(230)</span>
                </div>
                <div class="price">${{ $product->price }}</div>
                <div class="actionbtns">
                    <a href="" class="cartbtn">Add to Cart</a>
                    <a href="" class="wishcartbtn"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="others">
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/71gsuO6W6RL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Old School Authentic Japanese kanagawa the great wave Tattoo Pullover Hoodie
                </div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$11.0</div>
                 <div class="actionbtns">
                    <a href="" class="cartbtn">Add to Cart</a>
                    <a href="" class="wishcartbtn"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/81zwPHMuEfL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">PRODESIGN Mens Houndstooth Kimono Robe - Long Satin Sleepwear Silky Nightgown
                    Bathrobe Dressing Gown Cardigan </div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$9.99</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61t0HHP8ZcL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">ZAFUL Men's Side Star Casual Pants Y2K Lightweight Sweatpants Drawstring Dance
                    Pants Baggy Fashion Straight Leg Pants</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$120</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61iYJNq-CqL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Niepce Inc Men's Japanese Streetwear Techwear Cargo Pants with Design</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$5.32</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61DPmk4v+jL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">ellazhu Women's Oversized Irregular Drop Crotch Wide Leg Hakama Drawstring
                    Harem Pants GZ163</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$120</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61iqz8oNuhL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Trendy Queen Womens Oversized Summer T Shirts Plus Size Batwing Cute Casual
                    Tops Short Sleeves Fashion Workout Clothes</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$4.80</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
    </div>


</x-main>
