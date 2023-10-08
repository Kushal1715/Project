<?php
    include "connect.php";
    
    
    
    // search products 

    function searchProduct(){
        global $conn;

        if(isset($_GET['search_data_product'])){
        $search_data_value = $_GET['search_data'];

        $sql = "Select * from `product` where product_keyword like '%$search_data_value%'";
                    $result = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($result);

                    if($num_rows == 0){
                        echo "<h3 style='color:red; text-align:center;'>Product not available in this section</h3>";
                    }

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        
                        echo "<div class='pro'>
                        <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                        <div class='des'>
                            <h5>$product_title</h5>
                            <div class='star'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                            </div>
                            <h4>Rs.$product_price</h4>
                        </div>
                        <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                    </div>";
                    }
    }
}

function searchNewProduct(){
    global $conn;

    if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'];

    $sql = "Select * from `new_products` where product_keyword like '%$search_data_value%'";
                $result = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($result);

                if($num_rows == 0){
                    echo "<h3 style='color:red; text-align:center;'>Product not available in this section</h3>";
                }

                while($row= mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_image=$row['product_image'];
                    $product_price=$row['product_price'];
                    
                    echo "<div class='pro'>
                    <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                    <div class='des'>
                        <h5>$product_title</h5>
                        <div class='star'>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                        </div>
                        <h4>Rs.$product_price</h4>
                    </div>
                    <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                </div>";
                }
}
}

function productDetails(){
    global $conn;

    if(isset($_GET['product_id'])){

        $product_id = $_GET['product_id'];
        $sql = "select * from `product` where product_id=$product_id";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        $product_description=$row['product_description'];
                        
                        echo "
                        <div class='image'>
                        <img src='img/products/$product_image' width='100%' id='mainImg' />
                      </div>
                
                      <div class='details'>
                      <form method='post' action=''>

                        <h6 id='productName'>$product_title</h6>
                        <h2 id='productPrice'>Rs.$product_price</h2>
                        <input type='hidden' name='product_id' value='$product_id'>
                        <input type='hidden' name='product_name' value='$product_title'>
                        <input type='hidden' name='product_price' value='$product_price'>
                        <input type='hidden' name='product_image' value='$product_image'>
                        <input type='number' value='1' />
                        <a><button type='submit' name='add_to_cart'>Add To Cart</button></a>
                        <h4>Product Description</h4>
                        <span id='productDescription'
                          >$product_description</span
                        >
                        </form>
                      </div>
                      ";
                    }
}
}

function newproductDetails(){
    global $conn;

    if(isset($_GET['product_id'])){

        $product_id = $_GET['product_id'];
        $sql = "select * from `new_products` where product_id=$product_id";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        $product_description=$row['product_description'];
                        
                        echo "<div class='image'>
                        <img src='img/products/$product_image' width='100%' id='mainImg' />
                      </div>
                
                      <div class='details'>
                      <form method='post' action=''>

                        <h6 id='productName'>$product_title</h6>
                        <h2 id='productPrice'>Rs.$product_price</h2>
                        <input type='hidden' name='product_id' value='$product_id'>
                        <input type='hidden' name='product_name' value='$product_title'>
                        <input type='hidden' name='product_price' value='$product_price'>
                        <input type='hidden' name='product_image' value='$product_image'>
                        <input type='number' value='1' />
                        <a><button type='submit' name='add_to_cart'>Add To Cart</button></a>
                        <h4>Product Description</h4>
                        <span id='productDescription'
                          >$product_description</span
                        >
                        </form>
                      </div>>";
                    }
}
}




?>