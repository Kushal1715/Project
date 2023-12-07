<?php
include "../connect.php";
include "../functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .content h1{
            color: black;
        }
        .side-bar li{
    font-size: 13px;
    padding: 10px 40px;
    display: flex;
    align-items: center;
}
.product_img{
width:100px;
object-fit: contain;
}
    </style>
</head>
<body>
    <div class="side-bar">
        <div class="logo">
            <h2><span>digital</span>Bazar</h2>
        </div>
        <div class="head">
         <h1 class="text-center">Admin Dashboard</h1>
        </div>
        <ul>
            <li><button><a href="insert_products.php">Insert Products</a></button></li>
            <li><button><a href="admin_panel.php?view_products">View Products</a></button></li>
            <li><button><a href="admin_panel.php?list_orders">All Orders</a></button></li>
            <li><button><a href="admin_panel.php?list_payments">All Payments</a></button></li>
            <li><button><a href="admin_panel.php?list_users">List Users</a></button></li>
        </ul>
    </div>

    <div class="container text-center">
        <div class="header">
            <div class="nav">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>        
            <div class="user">
                <a href="admin_login.php" class="btn">Logout</a>
            </div>
        </div>
        <div class="content">
            <?php
            if(isset($_GET['view_products'])){
                include "view_products.php";
            }
            if(isset($_GET['edit_products'])){
                include "edit_products.php";
            }
            if(isset($_GET['edit_products2'])){
                include "edit_products2.php";
            }
            if(isset($_GET['delete_products'])){
                include "delete_products.php";
            }
            if(isset($_GET['delete_products2'])){
                include "delete_products2.php";
            }
            if(isset($_GET['list_orders'])){
                include "list_orders.php";
            }
            if(isset($_GET['delete_orders'])){
                include "delete_orders.php";
            }
            if(isset($_GET['list_payments'])){
                include "list_payments.php";
            }
            if(isset($_GET['delete_payments'])){
                include "delete_payments.php";
            }
            if(isset($_GET['list_users'])){
                include "list_users.php";
            }
            if(isset($_GET['delete_users'])){
                include "delete_users.php";
            }

            ?>
         
        </div>
    </div>

    

    

    

    
</body>
</html>