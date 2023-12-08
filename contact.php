<?php

include('connect.php');
include('functions.php');

session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <header class="navbar">
        <div class="nav">
            <h2 class="logo"><span class="span">digital</span>Bazar</h2>
        <nav class="navbar">
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="products.php">Products</a>
          <a href="contact.php">Contact</a>
          <?php
          if(!isset($_SESSION['username'])){
            echo "<a href='user/user_login.php' class='loginBtn'>Login</a>";
          }else{
            echo "<a href='user/user_logout.php' class='loginBtn' name='logout'>Logout</a>";
          }
          ?>
        </nav>            
        <form class="search" action="search_product.php" method="get">
            <input type="search" placeholder="Search.." name="search_data">
            <input class="searc" type="submit" value="Search" name="search_data_product">
            <?php
          if(!isset($_SESSION['username'])){
            echo "";
          }else{
            echo "<label class='profile'><a href='user/user_dashboard.php'><i class='fa-regular fa-user'></i></a></label>";
          }
          ?>
        </form>
        </div>
    </header>

    <section class="page-header contact">
      <h2>Let's talk!</h2>
      <p>Leave a message, We love to hear from you!</p>
    </section>

    <section class="formDetails">
        <form action="" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear form you</h2>
            <input type="text" placeholder="Your Name" name="name">
            <input type="text" placeholder="Email" name = "email">
            <input type="text" placeholder="Subject" name="subject">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button type="submit" name="contact_us">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/user_img/rahul2.jpg">
                <p><span>Rahul Shrestha</span> Owner 
                <br> Email: rahul@gmail.com
                </p>
            </div>
            <div>
                <img src="img/user_img/kushal.jpg">
                <p><span>Kushal Khadka</span> Owner 
                <br> Email: kushal@gmail.com
                </p>
            </div>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
  </body>
</html>
<?php
if(isset($_POST['contact_us'])){

  
  
  
      $name = $_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      
  
      $to = "kushalkhadka77@gmail.com";
      
      $headers = "From: user@gmail.com\r\nReply-To: digitalBazar@gmail.com";
      $mail_sent = mail($to,$subject,$message,$headers);
      
  }
?>
