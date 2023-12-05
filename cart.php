<?php
include "connect.php";

if (isset($_POST['update_product_quantity'])) {
    $update_value = $_POST['update_quantity'];
    // echo $update_value;

    $update_id = $_POST['update_quantity_id'];
    $update_query = mysqli_query($conn, "update `cart_details` set quantity=$update_value where product_id=$update_id");
    if ($update_query) {
        header('location:cart.php');
    }
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    // echo $remove_id;

    mysqli_query($conn, "Delete from `cart_details` where product_id=$remove_id");
}

session_start();






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website-Cart Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .cart table tbody td .update{
            margin-left: 5px;
    padding: 10px;
    cursor: pointer;
}

.cart table td:nth-child(2){
    width: 300px;
    text-align: center;
}

.cart table{
    border: 1px solid black;
}

.cart table td{
    border: 1px solid black;
}

.proceedBtn{
    text-decoration: none;
    padding: 12px 250px;
}

.proceedBtn:hover{
    text-decoration: underline;
}
    </style>
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
          <?php
          if(!isset($_SESSION['username'])){
            echo "<a href='user/user_login.php' class='loginBtn'>Login</a>";
          }else{
            echo "<a href='user/user_logout.php' class='loginBtn'>Logout</a>";
          }
          ?>
          
          <?php
          $select_product = mysqli_query($conn,"select * from `cart_details`") or die('query failed');
          $row_count = mysqli_num_rows($select_product);
          ?>
            <label class="cartIcon"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php echo $row_count ?></sup></a></label>
        </nav>            
        <form class="search" action="search_product.php" method="get">
            <input type="search" placeholder="Search.." name="search_data">
            <input class="searc" type="submit" value="Search" name="search_data_product">
            <?php
          if(!isset($_SESSION['username'])){
            echo "";
          }else{
            echo "<label class='profile'><a href='user/user_dashboard.php'><i class='fa-regular fa-user'></i></a></label>";
          }
          ?>
        </form>
        </div>
    </header>

    <section class="cart section-p1">
        <table width="100%">
            <?php
            $num = 1;
            $grand_total = 0;
            $select_cart_products = mysqli_query($conn, "select * from `cart_details`");
            if (mysqli_num_rows($select_cart_products) > 0) {
                echo " <thead>
                    <tr>
                        <td>S.No</td>
                        <td>Product</td>
                        <td>Image</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                        <td>Remove
                    </tr>
                </thead>";
                while ($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)) {
                    ?>

                    <tbody>
                        <tr>
                            <td>
                                <?php echo $num ?>
                            </td>
                            <td>
                                <?php echo $fetch_cart_products['name'] ?>
                            </td>
                            <td><img src="img/products/<?php echo $fetch_cart_products['image'] ?>"></td>
                            <td>Rs.
                                <?php echo number_format($fetch_cart_products['price']) ?>/-
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" value="<?php echo $fetch_cart_products['product_id'] ?>"
                                        name="update_quantity_id">
                                    <input type="number" min="1" class="qty"
                                        value="<?php echo $fetch_cart_products['quantity'] ?>" name="update_quantity">
                                    <input class="update" type="submit" value="Update" name="update_product_quantity">
                                </form>
                            </td>
                            <td>Rs.
                                <?php echo $subtotal = number_format($fetch_cart_products['price'] * $fetch_cart_products['quantity']) ?>/-
                            </td>
                            <td><a href="cart.php?remove=<?php echo $fetch_cart_products['product_id'] ?>"
                                    onclick=" return confirm('Are you sure want to delete this item?')"><i
                                        class="fa-regular fa-circle-xmark"></i></a></td>

                        </tr>
                        <?php
                        $grand_total = $grand_total + ($fetch_cart_products['price'] * $fetch_cart_products['quantity']);
                        $num++;

                }

            }
            ?>


            </tbody>
        </table>
    </section>

    <section class="cart-total section-p1">
        <div class="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs.
                        <?php echo number_format($grand_total) ?>/-
                    </td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Grand Total</strong></td>
                    <td><strong>Rs.
                            <?php echo number_format($grand_total) ?>/-
                        </strong></td>
                </tr>
            </table>
            <!-- Payment Method: <select>
                <option>Cash on delivery</option>
            </select> -->
            <a href="order.php" class="proceedBtn" name="checkout">Order Now</a>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
</body>

</html>