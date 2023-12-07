<?php
if(isset($_GET['delete_payments'])){
    $payment_id=$_GET['delete_payments'];

    $delete_payments = "Delete from `user_payments` where payment_id=$payment_id";
    $result_product = mysqli_query($conn,$delete_payments);
    if($result_product){
        echo "<script>alert('payment deleted successfully')</script>";
            echo "<script>window.open('admin_panel.php?list_payments','_self')</script>";
    }
}
?>