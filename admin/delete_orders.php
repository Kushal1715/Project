<?php
if(isset($_GET['delete_orders'])){
    $order_id=$_GET['delete_orders'];

    $delete_order = "Delete from `user_orders` where order_id=$order_id";
    $result_product = mysqli_query($conn,$delete_order);
    if($result_product){
        echo "<script>alert('Order deleted successfully')</script>";
            echo "<script>window.open('admin_panel.php?list_orders','_self')</script>";
    }
}
?>