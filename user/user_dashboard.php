<?php
session_start();
?>
<?php
include "../connect.php";
include "../functions.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .welcome h3 {
            text-align: center;
            color: red;
            background-color: rgb(0, 255, 219);
            font-size: 27px;
        }
        .edit_img{
    width: 100px;
    height: 100px;
    object-fit: contain;
}
    </style>

</head>

<body>
    <header class="navbar">
        <div class="nav">
            <h2 class="logo"><span class="span">digital</span>Bazar</h2>
            <nav class="navbar">
                <a href="../home.php">Home</a>
                <a href="../about.php">About</a>
                <a href="../products.php">Products</a>
                <a href="../contact.php">Contact</a>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='user_login.php' class='loginBtn'>Login</a>";
                } else {
                    echo "<a href='user_logout.php' class='loginBtn' name='logout'>Logout</a>";
                }
                ?>
                <?php
                $select_product = mysqli_query($conn, "select * from `cart_details`") or die('query failed');
                $row_count = mysqli_num_rows($select_product);
                ?>
                <label class="cartIcon"><a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>
                            <?php echo $row_count ?>
                        </sup></a></label>
            </nav>
            <form class="search" action="../search_product.php" method="get">
                <input type="search" placeholder="Search.." name="search_data">
                <input class="searc" type="submit" value="Search" name="search_data_product">
            </form>

        </div>
    </header>

    <section class="welcome">
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h3>Welcome " . $_SESSION['username'] . "</h3>";
        }
        ?>
    </section>


    <div class="row">
        <div class="col-md-2">
            <ul class="navbar-nav bg-secondary text-center" style="height:592px">
            <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light">
                        <h4>Profile Menu</h4>
                    </a>
                </li>
            <?php
                $username = $_SESSION['username'];
                $userimage = "select * from `user` where username = '$username'";
                $result = mysqli_query($conn,$userimage);
                $row_count = mysqli_fetch_array($result);
                $userimage = $row_count['user_image'];
                echo "<li class='nav-item bg-info'>
                <img src='../img/user_img/$userimage' class='profile_img my-4' alt=''>
            </li>";
            ?>
                
                
                <li class="nav-item bg-info">
                    <a href="user_dashboard.php" class="nav-link text-light">
                        Pending orders
                    </a>
                </li>
                <li class="nav-item bg-info">
                    <a href="user_dashboard.php?edit_account" class="nav-link text-light">
                        Edit Account
                    </a>
                </li>
                <li class="nav-item bg-info">
                    <a href="user_dashboard.php?my_orders" class="nav-link text-light">
                        My Orders
                    </a>
                </li>
                <li class="nav-item bg-info">
                    <a href="user_dashboard.php?change_password" class="nav-link text-light">
                        Change Password
                    </a>
                </li>
                <li class="nav-item bg-info">
                    <a href="user_logout.php" class="nav-link text-light">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 my-5 text-center">
            <?php
        order_details();
        if(isset($_GET['edit_account'])){
            include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
            include('user_orders.php');
        }
        if(isset($_GET['change_password'])){
            include('change_password.php');
        }
        ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>