<?php
if(isset($_GET['edit_account'])){
    $user_session_name = $_SESSION['username'];
    $select_query="select * from `user` where username='$user_session_name'";
    $result_query=mysqli_query($conn,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id = $row_fetch["user_id"];
    $user_name = $row_fetch["username"];
    $user_email = $row_fetch["user_email"];
    $user_mobile = $row_fetch["user_mobile"];
}
    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $user_name = $_POST["user_username"];
    $user_email = $_POST["user_email"];
    $user_mobile = $_POST["user_mobile"];
    $user_image = $_FILES["user_image"]['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_tmp,"../img/user_img/$user_image");

    //update query
    $update_data="update `user` set username='$user_name',user_email='$user_email', user_mobile=$user_mobile, user_image='$user_image' where user_id=$update_id";
    $result=mysqli_query($conn,$update_data);
    if($result){
        echo "<script>alert('Data updated successfully')</script>";
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
    <h3 class="text-center mb-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_name ?>" name="user_username">
        </div>
        <div class="form-outline mb-4">
            <input type="email" class="form-control w-50 m-auto" value="<?php echo $user_email ?>" name="user_email">
        </div>
        <div class="form-outline mb-4 d-flex w-50 m-auto">
            <input type="file" class="form-control m-auto" name="user_image">
            <img src="../img/user_img/<?php echo $userimage ?>" alt="" class="edit_img">
        </div>
        <div class="form-outline mb-4">
            <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_mobile ?>"  name="user_mobile">
        </div>

        <input type="submit" value="Update" class="bg-info py-2 px-3 border-0" name="user_update">

    </form>
</body>
</html>