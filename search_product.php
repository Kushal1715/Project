<?php
    include "connect.php";
    include "functions.php";
    $get_ip = getIPAddress();
if (isset($_POST['add_to_cart'])) {
    $products_id = $_POST['product_id'];
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "Select * from `cart_details` where name='$products_name'");
    if (mysqli_num_rows($select_cart) > 0) {
        echo "<script>alert('This item is already present inside cart')</script>";
        echo "<script>window.open('products.php','_self')</script>";
    } else {
        $insert_products = mysqli_query($conn, "insert into `cart_details` (product_id,name,price,image,quantity,ip_address) values ($products_id,'$products_name','$products_price','$products_image',$product_quantity,'$get_ip')");

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
        .product .pro .addToCart {
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
    </style>
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
                    if (isset($_GET['search_data_product'])) {
                        $search_data_value = $_GET['search_data'];
                
                        $select_products = mysqli_query($conn,"Select * from `product` where product_keyword like '%$search_data_value%'");
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                                ?>
                
                                <div class='pro'>
                
                                    <a href='product_details.php?product_id=<?php echo $fetch_product['product_id'] ?>'><img
                                            src='img/products/<?php echo $fetch_product['product_image'] ?>' id='$product_id'></a>
                                    <div class='des'>
                                        <h5>
                                            <?php echo $fetch_product['product_title'] ?>
                                        </h5>
                                        <div class='star'>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                        </div>
                                        <h4>Rs.
                                            <?php echo $fetch_product['product_price'] ?>/-
                                        </h4>
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
                        }else{
                            echo "<h3 style='color:red;text-align:center;margin:auto;font-size:2'>No products available in this section</h3>";
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
            if (isset($_GET['search_data_product'])) {
                $search_data_value = $_GET['search_data'];
        
                $select_products = mysqli_query($conn,"Select * from `new_products` where product_keyword like '%$search_data_value%'");
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                        ?>
        
                        <div class='pro'>
        
                            <a href='product_details.php?product_id=<?php echo $fetch_product['product_id'] ?>'><img
                                    src='img/products/<?php echo $fetch_product['product_image'] ?>' id='$product_id'></a>
                            <div class='des'>
                                <h5>
                                    <?php echo $fetch_product['product_title'] ?>
                                </h5>
                                <div class='star'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <h4>Rs.
                                    <?php echo $fetch_product['product_price'] ?>/-
                                </h4>
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
                }else{
                    echo "<h3 style='color:red;text-align:center;margin:auto;font-size:2'>No products available in this section</h3>";
                }
            }          
        ?>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>
</body>
</html>