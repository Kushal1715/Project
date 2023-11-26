<?php
session_start();
?>
<?php
include "../connect.php";
include "../functions.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .welcome h3 {
            text-align: center;
            color: red;
            background-color: rgb(0, 255, 219);
            font-size: 27px;
        }
    </style>

</head>

<body>
    <header class="navbar">
        <div class="nav">
            <h2 class="logo"><span class="span">digital</span>Bazar</h2>
            <nav class="navbar">
                <a href="../home.php">Home</a>
                <a href="../about.php">About</a>
                <a href="../products.php">Products</a>
                <a href="../contact.php">Contact</a>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='user_login.php' class='loginBtn'>Login</a>";
                } else {
                    echo "<a href='user_logout.php' class='loginBtn' name='logout'>Logout</a>";
                }
                ?>
                <?php
                $select_product = mysqli_query($conn, "select * from `cart_details`") or die('query failed');
                $row_count = mysqli_num_rows($select_product);
                ?>
                <label class="cartIcon"><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                            <?php echo $row_count ?>
                        </sup></a></label>
            </nav>
            <form class="search" action="../search_product.php" method="get">
                <input type="search" placeholder="Search.." name="search_data">
                <input class="searc" type="submit" value="Search" name="search_data_product">
            </form>

        </div>
    </header>
    <section class="welcome">
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h3>Welcome " . $_SESSION['username'] . "</h3>";
        }
        ?>
        <section>




            <footer class="section-p1">
                <div class="col">
                    <h2 class="logo"><span class="span">digital</span><span class="bazar">Bazar</span></h2>
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
                        <img src="../img/pay/app.jpg">
                        <img src="../img/pay/play.jpg">
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2023, Rahul and Kushal - E-commerce Website</p>
                </div>

            </footer>
</body>

</html>