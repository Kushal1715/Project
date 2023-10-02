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
  <?php
    include "navbar.php";
    ?>

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

    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
  </body>
</html>
