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
    <?php
    include "navbar.php";
    ?>

    <section class="offer">
        <h4>Get more for less!!!</h4>
        <h2>Fall in love with the</h2>
        <h1>best deals this season</h1>
        <p>Save more with cupons & up to 50% off!</p>
        <button>Shop Now</button>
    </section>

    <?php
    include "feature.php";
    ?>

    <section class="product section-p1">
        <h2>Featured Products</h2>
        <p>Enjoy the best rates!</p>
        <div class="pBox">
                <?php
                    getProducts();  
//                     $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;
                ?>
        </div>
    </section>

    <section class="product section-p1">
        <h2>New Arrivals</h2>
        <p>Hurry before stock runs out!</p>
        <div class="pBox">
        <?php
            getNewProducts();          
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