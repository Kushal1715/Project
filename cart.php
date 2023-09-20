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

    <section class="cart section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                    <td><img src="img/products/p1.jpg"></td>
                    <td>Product Name</td>
                    <td>Rs.2000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.2000</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                    <td><img src="img/products/p1.jpg"></td>
                    <td>Product Name</td>
                    <td>Rs.2000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.2000</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                    <td><img src="img/products/p1.jpg"></td>
                    <td>Product Name</td>
                    <td>Rs.2000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.2000</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                    <td><img src="img/products/p1.jpg"></td>
                    <td>Product Name</td>
                    <td>Rs.2000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.2000</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                    <td><img src="img/products/p1.jpg"></td>
                    <td>Product Name</td>
                    <td>Rs.2000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs.2000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="cart-total section-p1">
        <div class="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs.2000</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs.2000</strong></td>
                </tr>
            </table>
            Payment Method: <select>
                <option>Cash on delivery</option>
            </select>
            <button class="proceedBtn">Proceed</button>
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
