<?php
if(isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];

    $get_data = "Select * from `product` where product_id=$edit_id";
    $result = mysqli_query($conn, $get_data);
    $row = mysqli_fetch_array($result);
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keyword = $row['product_keyword'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];
}
?>
<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" value="<?php echo $product_title ?>" id="product_title" name="product_title"
                class="form-control mb-4" required="required">
        </div>
        <div class="form-outline w-50 m-auto ">
            <label for="product_desc" class="form-label">Product Description</label>
            <textarea rows="6" cols="50" id="product_desc" name="product_desc" class="form-control mb-4 h-50"
                required="required"><?php echo $product_description ?></textarea>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keyword" class="form-label">Product Keywords</label>
            <input type="text" value="<?php echo $product_keyword ?>" id="product_keyword" name="product_keyword"
                class="form-control mb-4" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image" class="form-label">Product Image</label>
            <div class="d-flex">
                <input type="file" id="product_image" name="product_image" class="form-control w-90 m-auto"
                    required="required">
                <img src="../img/products/<?php echo $product_image ?>" alt="" class="product_img">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label mt-4">Product Price</label>
            <input type="text" value="<?php echo $product_price ?>" id="product_price" name="product_price"
                class="form-control mb-4" required="required">
        </div>
        <div class="text-center">
            <input type="submit" name="edit_product" value="Update Product" class="btn btn-secondary px-3 mb-3">
        </div>
    </form>
</div>

<?php
if(isset($_POST['edit_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_desc'];
    $product_keyword = $_POST['product_keyword'];

    $product_price = $_POST['product_price'];


    $product_image = $_FILES["product_image"]['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "../img/products/$product_image");




    $update_products = "update `product` set product_title='$product_title', product_description='$product_description', product_keyword='$product_keyword', product_image='$product_image' , product_price = '$product_price', date=NOW() where product_id=$edit_id";
    $result_update = mysqli_query($conn, $update_products);
    if($result_update) {
        echo "<script>alert('Product updated successfully')</script>";
        echo "<script>window.open('admin_panel.php?view_products','_self')</script>";
    }
}
