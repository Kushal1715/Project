<?php
    include "connect.php";
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
            <label class="cartIcon"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></label>

        </nav>            
        <form class="search" action="search_product.php" method="get">
            <input type="search" placeholder="Search.." name="search_data">
            <input class="searc" type="submit" value="Search" name="search_data_product">
        </form>
        </div>
    </header>

    <section class="product section-p1">
        <h2>Featured Products</h2>
        <p>Enjoy the best rates!</p>
        <div class="pBox">
                <?php
                    searchProduct();  
                ?>
        </div>
    </section>

    <section class="product section-p1">
        <h2>New Arrivals</h2>
        <p>Hurry before stock runs out!</p>
        <div class="pBox">
        <?php
            searchNewProduct();          
        ?>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>
</body>
</html>