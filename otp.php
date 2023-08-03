<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OTP</title>
  <link rel="stylesheet" href="otp.css">

</head>
<body>
<!-- partial:index.partial.html -->



<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
            
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
 
</head>
<?php 
session_start(); 
include "db_conn.php";


if (isset($_SESSION['name']) && isset($_SESSION['username']) )

 ?>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="index.html">
        <h3>enter OTP </h3>

        <label for="username"> which we sent to your number  </label>
        <input type="text" placeholder="Email or Phone" id="username" readonly value="<?php echo $_SESSION['phone']; ?> ">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" pattern="\d{4}" title="Please enter a 4-digit OTP" required>


        <button>Log In</button>
        <div class="social">
        <a href="login.php">   <div class="go"><i style="font-size:24px" class="fa">&#xf104;</i>   back </div> </a>
          <!-- <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
        </div>
    </form>

    </div >
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
