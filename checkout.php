<?php
session_start();
if(isset($_SESSION['username'])){
    // echo "You are logged in. Proceed to checkout";

}
else{
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