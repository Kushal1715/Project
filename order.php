<?php
include "connect.php";
include "functions.php";
session_start();
if (isset($_SESSION['username'])) {
    $user_ip = getIPAddress();
    $get_user = "Select * from `user` where user_ip='$user_ip'";
    $result = mysqli_query($conn, $get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query["user_id"];

    //getting total items and total price of all items
    $quantity = 0;
    $total_price = 0;
    $cart_query_price = "select * from `cart_details` where ip_address='$user_ip'";
    $result_cart_price = mysqli_query($conn, $cart_query_price);
    $invoice_number = mt_rand();
    $status = 'pending';
    $count_products = mysqli_num_rows($result_cart_price);
    while ($row_price = mysqli_fetch_array($result_cart_price)) {
        $product_id = $row_price['product_id'];
        $quan = $row_price['quantity'];
        $quantity += $quan;
        $product_price = array($row_price['price'] * $quantity);
        $total_price += array_sum($product_price);

        // orders pending

    $insert_pending_orders = "Insert into `orders_pending` (user_id,invoice_number,product_id,quantity,order_status) 
    values ($user_id,$invoice_number,$product_id,$quan,'$status')";
$result_pending_query = mysqli_query($conn, $insert_pending_orders);
    }

    $insert_orders = "Insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) 
                    values ($user_id,$total_price,$invoice_number,$count_products,NOW(),'$status')";
    $result_query = mysqli_query($conn, $insert_orders);
    if ($result_query) {
        echo "<script>alert('Orders are submitted successfully')</script>";
        echo "<script>window.open('user/user_dashboard.php','_self')</script>";
    }

    

    // delete items from cart
    $empty_cart = "Delete from `cart_details` where
                    ip_address = '$user_ip'";
                    $result_delete = mysqli_query($conn, $empty_cart);

} else {
    header("Location:user/user_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>

</body>

</html>