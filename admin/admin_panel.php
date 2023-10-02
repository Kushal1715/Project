<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="side-bar">
        <div class="logo">
            <h2><span>digital</span>Bazar</h2>
        </div>
        <div class="head">
         <h1 >Admin Dashboard</h1>
        </div>
        <ul>
            <li><button><a href="insert_products.php">Insert Products</a></button></li>
            <li><button><a href="">View Products</a></button></li>
            <li><button><a href="">All Orders</a></button></li>
            <li><button><a href="">All Payments</a></button></li>
            <li><button><a href="">List Users</a></button></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>        
            <div class="user">
                <a href="admin_login.php" class="btn">Logout</a>
            </div>
        </div>
        <div class="form">
            <!-- <h1>Insert Products</h1> -->
         
        </div>
    </div>

    

    

    

    
</body>
</html>