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
  <?php
    include "navbar.php";
    ?>

    <section class="page-header contact">
      <h2>Let's talk!</h2>
      <p>Leave a message, We love to hear from you!</p>
    </section>

    <section class="formDetails">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear form you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button>Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/rahul2.jpg">
                <p><span>Rahul Shrestha</span> Owner 
                <br> Email: rahul@gmail.com
                </p>
            </div>
            <div>
                <img src="img/kushal.jpg">
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
