<?php
session_start();
?>
<?php
    include "connect.php";
    include "functions.php";
    $get_ip = getIPAddress();
    if(isset($_POST['add_to_cart'])){
        $products_id=$_POST['product_id'];
        $products_name=$_POST['product_name'];
        $products_price=$_POST['product_price'];
        $products_image=$_POST['product_image'];
        $product_quantity = 1;

        $select_cart=mysqli_query($conn,"Select * from `cart_details` where name='$products_name'");
        if(mysqli_num_rows($select_cart)>0){
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('products.php','_self')</script>";
        }else{
        $insert_products=mysqli_query($conn,"insert into `cart_details` (product_id,name,price,image,quantity,ip_address) values ($products_id,'$products_name','$products_price','$products_image',$product_quantity,'$get_ip')");

            echo "<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('products.php','_self')</script>";
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .welcome h3{
    text-align: center;
    color: red;
    background-color: rgb(0, 255, 219);
    font-size: 27px;
}

.product .pro .addToCart{
    width: 100px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #7cff8f;
    color: black;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom: 20px;
    right: 10px;
    cursor: pointer;
}

.offer a{
    border: 2px solid black;
    padding: 10px 20px;
    background-color: rgb(0, 255, 219);
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em;
    text-decoration: none;
    color: black;
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
            echo "<a href='user/user_logout.php' class='loginBtn' name='logout'>Logout</a>";
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
        </form>
        </div>
    </header>
    <section class="welcome">
    <?php
          if(isset($_SESSION['username'])){
            echo "<h3>Welcome ".$_SESSION['username'] . "</h3>";
          }
          ?>
        <section>

    <section class="offer">
        <h4>Get more for less!!!</h4>
        <h2>Fall in love with the</h2>
        <h1>best deals this season</h1>
        <p>Save more with cupons & up to 50% off!</p>
        <a href="products.php">Shop Now</a>
    </section>

    <?php
    include "feature.php";
    ?>

<section class="product section-p1">
        <h2>Featured Products</h2>
        <p>Enjoy the best rates!</p>
        <div class="pBox">
        <?php

$select_products=mysqli_query($conn,"Select * from `product` order by rand()");
if(mysqli_num_rows($select_products)>0){
while($fetch_product=mysqli_fetch_assoc($select_products)){
    ?>

<div class='pro'>
    
                    <a href='product_details.php?product_id=<?php echo $fetch_product['product_id'] ?>'><img src='img/products/<?php echo $fetch_product['product_image'] ?>' id='$product_id'></a>
                    <div class='des'>
                        <h5><?php echo $fetch_product['product_title'] ?></h5>
                        <div class='star'>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                        </div>
                        <h4>Rs.<?php echo $fetch_product['product_price'] ?>/-</h4>
                    </div>
    <form method="post" action="">

                    <input type="hidden" name="product_id" value="<?php echo $fetch_product['product_id'] ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_title'] ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['product_price'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image'] ?>">
                    <input class="addToCart" type="submit" value="Add to Cart" name="add_to_cart">
                
</form>
</div>

<?php
}
}

?>

        
</div>  

    </section>

    <section class="product section-p1">
        <h2>New Arrivals</h2>
        <p>Hurry before stock runs out!</p>
        <div class="pBox">
        <?php

$select_products=mysqli_query($conn,"Select * from `new_products` order by rand()");
if(mysqli_num_rows($select_products)>0){
while($fetch_product=mysqli_fetch_assoc($select_products)){
    ?>

<div class='pro'>
    
                    <a href='product_details.php?product_id=<?php echo $fetch_product['product_id'] ?>'><img src='img/products/<?php echo $fetch_product['product_image'] ?>' id='$product_id'></a>
                    <div class='des'>
                        <h5><?php echo $fetch_product['product_title'] ?></h5>
                        <div class='star'>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                        </div>
                        <h4>Rs.<?php echo $fetch_product['product_price'] ?>/-</h4>
                    </div>
    <form method="post" action="">

                    <input type="hidden" name="product_id" value="<?php echo $fetch_product['product_id'] ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_title'] ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['product_price'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image'] ?>">
                    <input class="addToCart" type="submit" value="Add to Cart" name="add_to_cart">
                
</form>
</div>

<?php
}
}

?>

        
</div>  
    </section>

    <section class="banner section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Don't delay—sales today!</span>
            <button class="bannerBtn">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Special offers!</h4>
            <h2>Up to 50% off</h2>
            <span>Don't delay—sales today!</span>
            <button class="bannerBtn bannerBtn2">Learn More</button>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>
</body>
</html>