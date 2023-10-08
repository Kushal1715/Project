<?php
session_start();
?>
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
          <?php
          if(!isset($_SESSION['username'])){
            echo "<a href='user/user_login.php' class='loginBtn'>Login</a>";
          }else{
            echo "<a href='user/user_logout.php' class='loginBtn'>Logout</a>";
          }
          ?>
        </nav>            
        <form class="search" action="search_product.php" method="get">
            <input type="search" placeholder="Search.." name="search_data">
            <input class="searc" type="submit" value="Search" name="search_data_product">
        </form>
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
        We are one of the most trusted online store in Nepal for all kinds of Electronic items. We offer wide range of
        quality products for daily to day activities. We believe in making a hassle free shopping to the versatile
        customers for all kinds of electronic componenets.
        Offering quality products to the customers with the best price at your door step where ever and whenever you
        need it.
        We focus on availing easy and personalized service for our customers. Your order is processed in a minimal time
        with atmost care. We will deliver your products to you carefully to make sure it reaches to you in the most
        perfect way.
        </p>
      </div>
    </section>

    <?php
    include "feature.php";
    ?>


    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
  </body>
</html>
