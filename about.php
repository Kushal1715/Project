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
  <body>
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

    <section class="page-header">
      <h2>About Us</h2>
      <p>Everything about the website</p>
    </section>

    <section class="aboutUs section-p1">
      <img src="img/banner/b21.jpg" class="img"/>
      <div>
        <h2>Everything About Us</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore fugit
          aliquid dolorem exercitationem dolor repudiandae nesciunt, expedita
          temporibus beatae? Laborum blanditiis iste sunt magnam optio enim vel
          quas corporis adipisci ipsa eveniet aliquam ex, recusandae, nesciunt
          natus dignissimos at sapiente quod nisi iure minima reiciendis. Error
          minima aliquam deserunt consequatur ipsam deleniti dolores iste nulla
          debitis doloribus, voluptas eaque eveniet aperiam incidunt nostrum
          reprehenderit consectetur porro assumenda commodi harum eius.
        </p>
      </div>
    </section>

    <section class="feature section-p1">
      <div class="fbox">
        <img src="img/features/f1.png" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fbox">
        <img src="img/features/f2.png" />
        <h6>Online Order</h6>
      </div>
      <div class="fbox">
        <img src="img/features/f3.png" />
        <h6>Save Money</h6>
      </div>
      <div class="fbox">
        <img src="img/features/f4.png" />
        <h6>Promotions</h6>
      </div>
      <div class="fbox">
        <img src="img/features/f5.png" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fbox">
        <img src="img/features/f6.png" />
        <h6>24/7 Support</h6>
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

    <script src="script.js"></script>
  </body>
</html>