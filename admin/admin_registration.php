<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin_registration.css">
</head>
<body>
    <header>
        <h2 class="logo">CStore</h2>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Products</a>
            <a href="#">Contact</a>
            <button class="loginBtn"><a href="admin_login.php">Login</a></button>
            <label class="cartIcon"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></label>
        </nav>            
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
    </header>

    <div class="box">
        <div class="loginForm">
            <h2>Admin Registration</h2>
            <form action="#">
            <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label>Full Name</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="inputBox">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Confirm Password</label>
                </div>
                <div class="rememberMe">
                    <label><input type="checkbox" required>I accept the <a href="#">terms and conditions</a></label>
                </div>
                <button type="submit" class="loginBtn">Register</button>
                <div class="registerAccount">
                    <p>Already have an account?<a href="admin_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>