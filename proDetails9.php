<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <section>
    <header class="navbar">
      <div class="nav">
        <h2 class="logo"><span class="span">digital</span>Bazar</h2>
        <nav class="navbar">
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="products.php">Products</a>
          <a href="contact.php">Contact</a>
          <a href="user/user_login.php" class="loginBtn">Login</a>
          <label class="cartIcon"
          ><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></label
          >
        </nav>
        <div class="search">
          <input type="text" placeholder="Search.." name="search" />
          <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
      </div>
    </header>

    <section class="productDetails section-p1">
      <div class="image">
        <img src="img/products/p9.png" width="100%" id="mainImg" />
      </div>

      <div class="details">
        <h6 id="productName">Headphone</h6>
        <h4 id="productDetails">RK-1000X M4</h4>
        <h2 id="productPrice">Rs.2000</h2>
        <input type="number" value="1" />
        <button>Add To Cart</button>
        <h4>Product Description</h4>
        <span id="productDescription"
          >A pair of small loudspeaker drivers worn on or around the head over a
          user's ears. They are electroacoustic transducers, which convert an
          electrical signal to a corresponding sound. Headphones let a single
          user listen to an audio source privately, in contrast to a
          loudspeaker, which emits sound into the open air for anyone nearby to
          hear.</span
        >
      </div>
    </section>

    <section class="product section-p1">
        <h2>Featured Products</h2>
         <div class="pBox">
        <div class="pro">
            <img src="img/products/p13.jpg" id="p13">
            <div class="des">
                <h5>1600W Iron</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Rs.1850</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/p14.jpg" id="p14">
            <div class="des">
                <h5>DPI Gaming Mouse</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Rs.1570</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/p15.jpg" id="p15">
            <div class="des">
                <h5>Solo Hacker USB-C</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Rs.750</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/p16.jpg" id="p16">
            <div class="des">
                <h5>IndoorCam C24 Webcam</h5>
                <div class="star">
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                    <i class="fa-solid fa-star star"></i>
                </div>
                <h4>Rs.9999</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <h2 class="logo">
          <span class="span">digital</span><span class="bazar">Bazar</span>
        </h2>
        <h4>Contacts:</h4>
        <p><strong>Email:</strong> digitalBazar01@gmail.com</p>
        <p><strong>Phone:</strong>+01 7890123 / +977 9841123456</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Contact us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" />
          <img src="img/pay/play.jpg" />
        </div>
      </div>
      <div class="copyright">
        <p>© 2023, Rahul and Kushal - E-commerce Website</p>
      </div>
    </footer>
    <script src="product.js"></script>
  </body>
</html>
