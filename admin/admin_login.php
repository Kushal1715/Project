<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <header>
        <h2 class="logo"><span>digital</span>Bazar</h2>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Products</a>
            <a href="#">Contact</a>
            <button class="loginBtn">Login</button>
            <label class="cartIcon"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></label>
        </nav>            
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
    </header>

    <div class="box">
        <div class="loginForm">
            <h2>Admin Login</h2>
            <form action="#">
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="rememberMe">
                    <label><input type="checkbox" required>Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="loginBtn">Login</button>
                <div class="registerAccount">
                    <p>Don't have an account?<a href="admin_registration.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>