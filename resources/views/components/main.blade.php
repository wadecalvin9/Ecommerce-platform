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

<style>


</style>

<body>
    <!-- NAV BAR-->
    <div class="nav">
        <div class="navlinks">
            <a href="/" class="navlink">Home</a>
            <a href="/shop" class="navlink">Shop</a>
            <a href="/blog" class="navlink">Blog</a>
            <a href="/contactus" class="navlink">Contact Us</a>
        </div>

        <div class="logo">
            <h1>Maison de Lune</h1>
        </div>

        <div class="icons">
            @auth
                <a href="/profile" class="navlink">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="/wishlist" class="navlink cart-link">
                    <i class="fa-solid fa-heart"></i>
                    <p class="wish-count">{{ $wishcount }}</p>
                </a>
                <a href="{{ route('cart.index') }}" class="navlink cart-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="cart-count">{{ $cartcount }}</p>
                </a>


                <form action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="navlink" style="background: none; border: none; cursor: pointer;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('auth.login') }}" class="navlink">
                    <i class="fa-solid fa-user"></i>
                </a>
            @endguest
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
                <a href="/profile" class="navlink">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="" class="navlink">
                    <i class="fa-solid fa-heart"></i>
                </a>
                <a href="{{ route('cart.index') }}" class="navlink">
                    <i class="fa-solid fa-cart-shopping"></i>

                </a>

                <form action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="navlink" style="background: none; border: none; cursor: pointer;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('auth.login') }}" class="navlink">
                    <i class="fa-solid fa-user"></i>
                </a>
            @endguest
        </div>
    </div>

    {{ $slot }}

</body>

</html>
