<?php
session_start();
if(isset($_SESSION['username'])){
    echo "You are logged in. Proceed to checkout";
}
else{
    header("Location:user/user_login.php");
    exit();
}
?>