<?php
if(isset($_GET['delete_users'])){
    $user_id=$_GET['delete_users'];

    $delete_user = "Delete from `user` where user_id=$user_id";
    $result_product = mysqli_query($conn,$delete_user);
    if($result_product){
        echo "<script>alert('user deleted successfully')</script>";
            echo "<script>window.open('admin_panel.php?list_users','_self')</script>";
    }
}
?>