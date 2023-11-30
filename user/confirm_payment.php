<?php
session_start();

include "../connect.php";

if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_data = "select * from `user_orders` where order_id=$order_id";
    $result = mysqli_query($conn,$select_data);
    $row_fetch = mysqli_fetch_array($result);
    $invoice_number = $row_fetch["invoice_number"];
    $amount_due= $row_fetch["amount_due"];

}

if(isset($_POST['confirm_payment'])){
    $invoice_number = $_POST['invoice_number'];
    $amount=$_POST['amount'];
    $location=$_POST['location'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into `user_payments` (order_id,invoice_number,amount,location,payment_mode) values 
    ($order_id,$invoice_number,$amount,'$location','$payment_mode')";
    $result = mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Successfully completed the payment')</script>";
        echo "<script>window.open('user_dashboard.php?my_orders','_self')</script>";
    }

    $update_orders = "update `user_orders` set order_status='Complete' where order_id = $order_id";
    $result_orders = mysqli_query($conn,$update_orders);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .label{
            margin-top: 15px;
            margin-bottom: 0px;
        }
        .select{
            margin-top: 25px;
        }
        .button{
            margin-top: 15px;
        }
        
    </style>
</head>
<body class="bg-secondary">
    <div class="container my-5">
    <h1 class="text-center text-light">Confirm Payment</h1>

        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
            <label for="" class="label text-light">Invoice Number:</label>
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="" class="label text-light">Amount</label>
                <input type="text" class=" form-control w-50 m-auto" name="amount" value="<?php echo $amount_due ?>">
                
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
            <label for="" class="label text-light">Location:</label>
                <input type="text" class="form-control w-50 m-auto" name="location">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <select name="payment_mode" class=" w-60 select">
                    <option>Select Payment Mode</option>
                    <option>Cash on Delivery</option>
                </select>
            </div>
            <div class=" button form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class=" button bg-info py-2 px-3 border-0" value="Confirm" name="confirm_payment">
            </div>
        </form>
    </div>
</body>
</html>