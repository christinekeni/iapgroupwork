<?php
    require_once "includes/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abilia Candle Co</title>
    <link rel = "icon" href = "Images/Content/Icon Logo Header.jpg" type="image/x-icon" />
    <link rel = "stylesheet" href = "css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="topnav" >
        <div class="stroke">
            <div class="fill">
                <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="candlecare.html">Candle Care</a></li>
                <li><a href="contactUs.html">Contact Us</a></li>
            <div class="topnav_right">
                <li><a href="signIn.php">Sign In</a></li>
                <!-- <li><a href="signUp.html">Sign Up</a></li> -->
            </div>      
            </ul>
        
    </div>
</div>
</div>
<div class="banner">
    <h5>Welcome to Abilia Candle Co. Get 50&#37; off your first order&#33;</h5>
</div>
<div class="signin">
    <h2>Welcome To Abilia Candle Co&#33;</h2>
</div>
<div class="row">
    <div class="content">
        <form action="processes/signin_process.php" method="post" autocomplete="off">
            <p>Not New Here? Sign In<br><br>
            E&#45;Mail Address<br>
            <input type="email" name="email"><br><br>
            Password<br>
            <input type="password" name="pass">
            <br><br>
            <a href="#">Forgot your password&#63;</a><br><br><br>
            <button name="Login">Sign In Now</button>
            </p>

            <br>
            
            <h3>Don&#39;t have an account&#63;</h3>
            <p>Create one now for amazing discounts and reward <br><br>
            <a href="signUp.php">Create An Account</a></p>

        </form>


    </div>
    <div class="sidebar">
        <img src="Images/Content/Candles3.jpg">
    </div>
</div>

    <div class="footer">
        <p>
            Explore our candle collection and let the luminous glow of our creations illuminate your world. Start browsing now
        </p>
        <hr>
        <p>
            <a href="#"><i class="fa fa-instagram" style="font-size: 24px;"></i></a>
            <a href="#"><i class="fa fa-envelope" style="font-size: 24px;"></i></a>
            <a href="#"><i class="fa fa-twitter" style="font-size: 24px;"></i></a>
            <a href="#"><i class="fa fa-facebook" style="font-size: 24px;"></i></a>
            <a href="#"><i class="fa fa-pinterest" style="font-size: 24px;"></i></a>
    
    
        </p>
        <hr>
        <div class="top">
            <span class="material-symbols-outlined">
                expand_less
                </span><br>
            <a href="#top">Back To Top</a>
        </div>
        <hr>
        Copyright&#169; 2023 ABILIA CANDLE CO
    </div>
</body>
</html>