<?php
session_start();
?>
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
