<?php
include "../connect.php";
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';
    $product_type = $_POST['product_type'];
    $product_image = $_FILES['product_image']['name'];
    $temp_image = $_FILES['product_image']['tmp_name'];

    // checking empty conditions

    if ($product_title == '' || $product_description == '' || $product_keyword == '' || $product_price == '' || $product_image == '' || $temp_image == '') {
        echo "<script>alert('please fill all the available fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image, "./product_images/$product_image");

        if($product_type == 1){
            $sql = "INSERT INTO `product` (`product_title`, `product_description`, `product_keyword`, `product_image`, `product_price`, `date`, `status`) 
            VALUES ('$product_title', '$product_description', '$product_keyword', '$product_image', '$product_price', current_timestamp(), '$product_status')";

            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('successfully inserted product')</script>";
            }
        }

        if($product_type == 2){
            $sql = "INSERT INTO `new_products` (`product_title`, `product_description`, `product_keyword`, `product_image`, `product_price`, `date`, `status`) 
            VALUES ('$product_title', '$product_description', '$product_keyword', '$product_image', '$product_price', current_timestamp(), '$product_status')";

            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('successfully inserted new product')</script>";
            }
        }
    
        
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: url(../img/bg.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            color: white;
        }

        label {
            padding-top: 20px;
        }

        .btn {
            margin-top: 20px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter product description" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                    placeholder="Enter product keyword" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product Image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" autocomplete="off"
                    required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter product price" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_type" class="form-label">Product Type : </label>
                <select name="product_type" class="form-select">
                    <option value="1">Freaured product</option>
                    <option value="2">New product</option>
            </select>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mu-3 mb-3 px-3 btn"
                    value="Insert Products">
            </div>
        </form>
    </div>

</body>

</html>