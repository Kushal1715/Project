<?php
include('../connect.php');
include('../functions.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="user_login.css">
</head>
<body>
    <header>
        <h2 class="logo"><span>digital</span>Bazar</h2>
        <nav class="navbar">
            <a href="../home.php">Home</a>
            <a href="../about.php">About</a>
            <a href="../products.php">Products</a>
            <a href="../contact.php">Contact</a>
        </nav>            
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
    </header>

    <div class="box">
        <div class="loginForm">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required name="username" id="username" autocomplete="off">
                    <label for="username">Username</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="password" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="rememberMe">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="loginBtn" name="user_login">Login</button>
                <div class="registerAccount">
                    <p>Don't have an account?<a href="user_registration.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['user_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_query = "select * from `user` where username= '$username'";
        $result = mysqli_query($conn,$select_query);
        $row_count=mysqli_num_rows($result);

        $cart_query = "select * from `cart_details`";
        $result2 = mysqli_query($conn,$cart_query);
        $row_count2=mysqli_num_rows($result2);

        if($user_data = mysqli_fetch_array($result)){
            $en_password = $user_data['user_password'];
            if(md5($en_password== $password)){
                if($row_count>0 && $row_count2== 0){
                    echo "<script>alert('Login successfully')</script>";
        
                    $_SESSION['username'] = $username;
                    header ('location:../home.php');
        
        
                }else if($row_count>0 && $row_count2> 0){
                    $_SESSION['username'] = $username;
                    echo "<script>alert('Login successfully')</script>";
        
                    header ('location:../cart.php');
                }
            }
        }else{
            echo "<script>alert('Invalid username or password')</script>";
        }
        

        
        
        
    }
?>

