<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <!-- NAV -->
    <div class="nav">
        <div class="navlinks">
            <a href="/" class="navlink">Home</a>
            <a href="/shop" class="navlink">Shop</a>
            <a href="/blog" class="navlink">Blog</a>
            <a href="/contactus" class="navlink">Contact Us</a>
        </div>

        <div class="logo">
            <h1>Mixtas</h1>
        </div>

        <div class="icons">
            @auth
                <a href="/profile" class="navlink"><i class="fa-solid fa-user"></i></a>

            @endauth
            @guest
                <a href="/register" class="navlink"><i class="fa-solid fa-user"></i></a>

            @endguest
            <a href="/wishlist" class="navlink"><i class="fa-solid fa-heart"></i></a>
            <a href="/cart" class="navlink"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>

        <!-- Mobile Menu Button -->
        <a id="menuopenbtn" class="menuopenbtn"><i class="fa-solid fa-bars"></i></a>
    </div>

    <!-- MOBILE NAV -->
    <div id="mobilemenu" class="mobilenav">
        <button id="closebtn" class="closebtn">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="logo">
            <h1>Mixtas</h1>
        </div>

        <div class="navlinks">
            <a href="/" class="navlink">Home</a>
            <a href="/shop" class="navlink">Shop</a>
            <a href="/blog" class="navlink">Blog</a>
            <a href="/contactus" class="navlink">Contact Us</a>
        </div>

        <div class="icons">
            @auth
                <a href="/profile" class="navlink"><i class="fa-solid fa-user"></i></a>
            @endauth
            @guest
                <a href="/register" class="navlink"><i class="fa-solid fa-user"></i></a>

            @endguest
            <a href="/wishlist" class="navlink"><i class="fa-solid fa-heart"></i></a>
            <a href="/cart" class="navlink"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>


    <!-- HERO -->
    <div class="hero">
        <img class="heroimg" src="https://images.pexels.com/photos/3768005/pexels-photo-3768005.jpeg"
            alt="Fashion Hero Image" />
        <h1>Welcome to Mixtas</h1>
        <p>
            Your one-stop shop for all things fashion and lifestyle. Discover the latest trends,
            exclusive deals, and a seamless shopping experience.
        </p>
        <a href="/shop" class="cta-button">Shop Now</a>
    </div>

    <div class="tittle">
        <h2>New Arrivals</h2>
    </div>



    <!-- NEW ARRIVALS -->
    <div class="newarrivalcards">
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61jYaoKvuJL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Aelfric Eden Oversized Sweater 90s Vintage Cable Knit Long Sleeve Women Heavy
                    Crewneck Pullover</div>
                <div class="rating">
                    ★★★★☆ <span>(230)</span>
                </div>
                <div class="price">$43.99</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>

        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/617TbkkZC4L._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">PLEPAN Men's Casual Cargo Pants Drawstring Hiking Pants Workout Tactical
                    Joggers Sweatpants for Men</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$17.99</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>

        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/81x2mbPJiBL._AC_UL640_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">ZITY Men's Flannel Hoodie Shirts Casual Button Down Plaid Shirt Jackets for Men
                    Long Sleeve Stylish Hooded </div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$23.28</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>


        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/718wzXgnS-L._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">AUTOMET Womens Long Sleeve Tshirts Business Casual Tunic Work Tops Fashion
                    Cute Sweaters Fall Outfits 2025</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$11.99</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>



        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/817Ygaz9iqL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">WIHOLL Womens Sweaters Trendy Color Block Tops Long Sleeve Shirts Fall Outfits
                    Early Fall Fashion 2025 Winter </div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$120</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>



        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61N5Hfjqi4L._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Dear Math Grow Up And Solve Your Own Problems Teens Trendy T-Shirt</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$120</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="tittle">
        <h2>Sponsored products</h2>
    </div>

    <!-- Sponsored products -->
    <div class="newarrivalcards">
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/71r3saQUmKL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Disney Princess Zip Up Hoodie Infant to Big Kid Sizes (18 Months - 14-16)
                </div>
                <div class="rating">
                    ★★★☆ <span>(230)</span>
                </div>
                <div class="price">$12.49</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>

        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/81SbCv4YisL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Girls Fleece Lined Leggings Cotton Kids Winter Warm Leggings Thick Thermal
                    Tights Pants</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$11.89</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>

        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/71UajD31lvL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">10th Birthday Boy Level 10 Gamer 10 Year Video Game Party T-Shirt</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$12.40</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/618xOVHAX4L._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Disney Pixar The Incredibles Logo Symbol Costume T-Shirt</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$120</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/81MlkdZ2yPL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">Hawaiian Shirts for Women Tropical Shirt Summer Beach Button Down Short Sleeve
                    Blouses Floral Top Aloha Luau Outfits 2025</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$13.0</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
        <div class="card">
            <img class="cardimg" src="https://m.media-amazon.com/images/I/61QAIqP7pcL._AC_UL640_FMwebp_QL65_.jpg"
                alt="">
            <div class="cardinfo">
                <div class="productname">I'm Different Funny Building Blocks Master Builder Boys T-Shirt</div>
                <div class="rating">
                    ★★★★☆ <span>(154)</span>
                </div>
                <div class="price">$16.6</div>
                <button class="cartbtn">Add to Cart</button>
            </div>
        </div>
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
                <button class="cartbtn">Add to Cart</button>
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







</body>

</html>
