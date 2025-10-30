<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

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
      <a href="/profile" class="navlink"><i class="fa-solid fa-user"></i></a>
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
    <a href="/profile" class="navlink"><i class="fa-solid fa-user"></i></a>
    <a href="/wishlist" class="navlink"><i class="fa-solid fa-heart"></i></a>
    <a href="/cart" class="navlink"><i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</div>


  <!-- HERO -->
  <div class="hero">
    <img class="heroimg"
         src="https://images.pexels.com/photos/2787341/pexels-photo-2787341.jpeg"
         alt="Fashion Hero Image" />
    <h1>Welcome to Mixtas</h1>
    <p>
      Your one-stop shop for all things fashion and lifestyle. Discover the latest trends,
      exclusive deals, and a seamless shopping experience.
    </p>
    <a href="/shop" class="cta-button">Shop Now</a>
  </div>
</body>
</html>
