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
            <button class="loginBtn">Login</button>
            <label class="cartIcon"><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></label>

        </nav>            
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
    </header>

    <div class="box">
        <div class="loginForm">
            <h2>Registration</h2>
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
                    <p>Already have an account?<a href="user_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>