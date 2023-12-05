<?php
include "connect.php";


function productDetails()
{
    global $conn;

    if (isset($_GET['product_id'])) {

        $product_id = $_GET['product_id'];
        $sql = "select * from `product` where product_id=$product_id";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];

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

function newproductDetails()
{
    global $conn;

    if (isset($_GET['product_id'])) {

        $product_id = $_GET['product_id'];
        $sql = "select * from `new_products` where product_id=$product_id";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];

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


function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


//get user order details
function order_details()
{
    global $conn;
    $username = $_SESSION['username'];
    $get_details = "select * from `user` where username = '$username'";
    $result_query = mysqli_query($conn, $get_details);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $user_id = $row["user_id"];
        if (!isset($_GET['edit_account'])) {
            if (!isset($_GET['my_orders'])) {
                if (!isset($_GET['delect_account'])) {
                    $get_orders = "select * from `user_orders` where user_id=$user_id and order_status='pending'";
                    $result_orders_query = mysqli_query($conn, $get_orders);
                    $row_count = mysqli_num_rows($result_orders_query);
                    if ($row_count > 0) {
                        echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> pending orders</h3>
            <p class='text-center'><a href='user_dashboard.php?my_orders' class='text-dark'>Order Details</a></p>";
                    } else {
                        echo "<h3 class='text-center'>You have 0 pending orders</h3>
            <p class='text-center'><a href='../products.php' class='text-dark'>Explore products</a></p>";
                    }
                }
            }
        }
    }
}
?>