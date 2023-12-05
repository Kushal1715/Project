<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center m-auto">All Products</h3>
    <table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $get_products="select * from `product`";
        $result = mysqli_query($conn, $get_products);
        $number = 0;
        while( $row = mysqli_fetch_array($result) ){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $number++;
            ?>
            <tr>
            <td><?php echo $product_id ?></td>
            <td><?php echo $product_title ?></td>
            <td><img src='../img/products/<?php echo $product_image ?>' class='product_img'></td>
            <td><?php echo $product_price ?></td>
            <td>
            <?php
                $get_count = "Select * from `orders_pending` where product_id=$product_id";
                $result_count = mysqli_query($conn, $get_count);
                $total_quantity = 0;
                while($row_fetch = mysqli_fetch_assoc($result_count)){
                    $quantity = $row_fetch['quantity'];
                    $total_quantity += $quantity;
                }
                echo $total_quantity;
                

                ?>
            </td>
            <td><a href='admin_panel.php?edit_products' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
            <?php
        }
        ?>
        <?php
        $get_products="select * from `new_products`";
        $result = mysqli_query($conn, $get_products);
        $number = 0;
        while( $row = mysqli_fetch_array($result) ){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $number++;
            ?>
            <tr>
            <td><?php echo $product_id ?></td>
            <td><?php echo $product_title ?></td>
            <td><img src='../img/products/<?php echo $product_image ?>' class='product_img'></td>
            <td><?php echo $product_price ?></td>
            <td>
            <?php
                $get_count = "Select * from `orders_pending` where product_id=$product_id";
                $result_count = mysqli_query($conn, $get_count);
                $total_quantity = 0;
                while($row_fetch = mysqli_fetch_assoc($result_count)){
                    $quantity = $row_fetch['quantity'];
                    $total_quantity += $quantity;
                }
                echo $total_quantity;
                

                ?>
            </td>
            <td><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
            <?php
        }
        ?>
        
    </tbody>
    </table>
</body>
</html>