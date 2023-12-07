<h3 class="text-center">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">

    <?php
$get_payments = "select * from `user`";
$result = mysqli_query($conn,$get_payments);
$row_count = mysqli_num_rows($result);


if($row_count == 0){
    echo "<h2 class='bg-danger text-center mt-5'>No users yet</h2>";
}else{
    echo "<tr>
<th>S.No</th>
<th>Username</th>
<th>User email</th>
<th>User Image</th>
<th>User Mobile</th>
<th>Delete</th>
</tr>
</thead>
<tbody class='bg-secondary text-light'>";
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_mobile=$row_data['user_mobile'];
        $user_image=$row_data['user_image'];
        
        $number ++;
        echo "<tr>
        <td>$number</td>
        <td>$username</td>
        <td>$user_email</td>
        <td><img src='../img/user_img/$user_image' alt='$username' class='product_img'/></td>
        <td>$user_mobile</td>
        <td><a href='admin_panel.php?delete_users=$user_id' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
    
    </tr>";
    }
}
    ?>
        
        
    </tbody>
</table>