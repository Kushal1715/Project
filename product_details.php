<?php
    include "connect.php";
    include "functions.php";
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
    <?php
    include "navbar.php";
    ?>

    <section class="productDetails section-p1">
      <?php
        productDetails();
        newproductDetails();
      ?>
    </section>

    <section class="product section-p1">
        <h2>Featured Products</h2>
         <div class="pBox">
        <?php
          getFourProducts();
        ?>
      </div>
    </section>

    <?php
    include "footer.php";
    ?>
    <script src="product.js"></script>
</body>
</html>
