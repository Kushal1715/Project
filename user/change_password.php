<?php
if(isset($_GET['change_password'])){
    $user_session_name = $_SESSION['username'];
    $select_query="select * from `user` where username='$user_session_name'";
    $result_query=mysqli_query($conn,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id = $row_fetch["user_id"];

    $user_password = $row_fetch["user_password"];
}
    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $old_password = $_POST["old_password"];

        
    $new_password = $_POST["new_password"];
    $new_password2 = $_POST["new_password2"];

    
    


    //update query
    $update_data="update `user` set user_password='$new_password' where user_id=$update_id";
    if($old_password != $user_password){
        echo "<script>alert('Invalid old password')</script>";
    }else if($new_password != $new_password2){
        echo "<script>alert('Password do not match')</script>";
    }else{
    $result=mysqli_query($conn,$update_data);
    echo "<script>alert('Password changed successfully')</script>";
        
        echo "<script>window.open('user_logout.php','_self')</script>";
    }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
</head>
<body>
    <h3 class="text-center mb-4">Change Your Password</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            Old password:
            <input type="text" class="form-control w-50 m-auto" required name="old_password">
        </div>
        <div class="form-outline mb-4">
            New password:
            <input type="text" class="form-control w-50 m-auto" required name="new_password">
        </div>
        
        <div class="form-outline mb-4">
            Confirm password:
            <input type="text" class="form-control w-50 m-auto" required  name="new_password2">
        </div>

        <input type="submit" value="Change" class="bg-info py-2 px-3 border-0" name="user_update">

    </form>
</body>
</html>