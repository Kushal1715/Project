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