<?php
if(isset($_GET['delete_products'])){
    $delete_id=$_GET['delete_products'];

    $delete_product = "Delete from `product` where product_id=$delete_id";
    $result_product = mysqli_query($conn,$delete_product);
    if($result_product){
        echo "<script>alert('Product deleted successfully')</script>";
            echo "<script>window.open('admin_panel.php?view_products','_self')</script>";
    }
}
?>