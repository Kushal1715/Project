<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_SESSION['username'];
    $get_user="select * from `user` where username='$username'";
    $result = mysqli_query($conn, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    ?>
<h3 class="text-success">All my Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
    <tr>
        <th>S.No</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Status</th>
        <th>Click to Confirm</th>
    </tr>
    </thead>
    <tbody class='bg-secondary text-light'>
        <?php
        $get_order_details="select * from `user_orders` where user_id = $user_id";
        $result_orders = mysqli_query($conn, $get_order_details);
        $number = 1;

        while($row_orders=mysqli_fetch_assoc($result_orders)) {
            $order_id = $row_orders["order_id"];
            $amount_due = $row_orders["amount_due"];
            $invoice_number = $row_orders["invoice_number"];
            $total_products = $row_orders["total_products"];
            $order_status = $row_orders["order_status"];
            if($order_status=='pending'){
                $order_status = 'Incomplete';
            }else{
                $order_status = 'Complete';
            }
            $order_date = $row_orders["order_date"];
        echo "
        <tr>
            <td>$number</td>
            <td>$amount_due</td>
            <td>$total_products</td>
            <td>$invoice_number</td>
            <td>$order_date</td>
            <td>$order_status</td>
            <td><a href='confirm_payment.php' class='text-light'>Confirm</a></td>
        </tr>";
        $number++;
    }
?>
    </tbody>
    
</table>
</body>
</html>