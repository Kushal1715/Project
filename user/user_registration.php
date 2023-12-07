<?php
include('../connect.php');
include('../functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="user_registration.css">
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
            <h2>Registration</h2>
            <form action="" method="post">

                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required name="username" id="username" autocomplete="off">
                    <label for="username">Username</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required name="email" id="email" autocomplete="off">
                    <label for="email">Email</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" required name="contact" id="contact" autocomplete="off">
                    <label for="contact">Phone Number</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="password" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="cpassword" id="cpassword">
                    <label for="cpassword">Confirm Password</label>
                </div>
                <div class="rememberMe">
                    <label><input type="checkbox" required>I accept the <a href="#">terms and conditions</a></label>
                </div>
                <button type="submit" class="loginBtn" name="user_register">Register</button>
                <div class="registerAccount">
                    <p>Already have an account?<a href="user_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['user_register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = 'user.jpg';
    $user_ip = getIPAddress();
    $pw = strlen($password);
    $en_password = md5($password);

    $select_query = "select * from `user` where username='$username' or user_email='$email'";
    $result = mysqli_query($conn, $select_query);
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0) {
        echo "<script>alert('Username or email already exist')</script>";
    }else if($pw < 8){
        echo "<script>alert('Password Must Contain At Least 8 Characters!')</script>";
    }else if($password != $cpassword){
        echo "<script>alert('Password do not match')</script>";
    } else {
        $insert_query = "insert into `user` (username,user_email,user_password,user_mobile,user_image,user_ip) values ('$username','$email','$en_password','$contact','$image','$user_ip')";
        $result2 = mysqli_query($conn, $insert_query);
        if ($result2) {
            echo "<script>alert('Registration completed')</script>";
            echo "<script>window.open('user_login.php','_self')</script>";

        } else {
            echo "<script>alert('Registration failed')</script>";
        }
    }


}
?>