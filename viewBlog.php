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
                <li><a href="admin.php">Admin</a></li>

            <div class="topnav_right">
                <li><a href="signIn.php">Sign In</a></li>
                <!-- <li><a href="signUp.html">Sign Up</a></li> -->
                  <li><a href = "processes/signout_process.php?signout" >Sign Out</a></li>
            </div>      
            </ul>
        
    </div>
</div>
</div>
<div class="banner">
    <h5>Welcome to Abilia Candle Co. Get 50&#37; off your first order&#33;</h5>
</div>
<div class="blog">
    <img src="Images/Content/Candles9.jpg" width="100%">
    <div>
                <h3>10 Essential Candle Care Tips for a Longer-lasting, Safer Burn</h3>
                <p><sub>10/02/2023<br>By: Keith Kinuthia</sub></p><br>
                <p>Introduction:<br>
                Welcome to our candle care blog post, where we share essential tips to help you enjoy a longer-lasting and safer candle burning experience.
                Proper candle care not only ensures optimal performance but also enhances the ambiance and fragrance of your candles. Read on to discover our top 10 candle care tips.</p>
                <h4>Trim the Wick:</h4>
                <p>Trimming the wick to approximately 1/4 inch before each burn helps maintain a steady flame, prevents excessive soot, and ensures an even burn.</p>
                <h4>Allow for a Full Wax Pool:</h4>
                <p>On the first burn, allow your candle to create a full wax pool that reaches the edges of the container. This prevents tunneling and maximizes the fragrance throw in subsequent burns.</p>
                <h4>Avoid Drafts:</h4>
                <p> Place your candles away from drafts, as they can cause uneven burning and lead to excessive smoke or soot. Ensure a steady burn by keeping them away from open windows, fans, or air conditioning vents.</p>
                <h4>Burn in Intervals:</h4>
                <p>To avoid overheating and to extend the lifespan of your candle, limit burn sessions to 2-3 hours at a time. Extinguish the candle between burns and allow it to cool before relighting.</p>
                <h4>Extinguish Safely:</h4>
                <p>Use a candle snuffer or gently blow out the flame to extinguish the candle. Avoid blowing too hard, as it can cause hot wax to splatter. Never use water to extinguish a candle.</p>
                <h4>Keep the Wax Pool Clean:</h4>
                <p>After extinguishing the flame, remove any debris, such as wick trimmings or matches, from the wax pool. This helps maintain a clean burn and prevents potential hazards.</p>
                <h4>Store Candles Properly:</h4>
                <p>Store your candles in a cool, dry place, away from direct sunlight or extreme temperatures. This helps preserve their quality, color, and fragrance.</p>
                <h4>Avoid Overcrowding:</h4>
                <p>Keep candles at least 3 inches apart when burning multiple candles together. This prevents heat transfer and ensures an even burn.</p>
                <h4>Monitor Burning Candles:</h4>
                <p>Never leave burning candles unattended. Keep them within sight and away from the reach of children or pets. Place them on a stable surface and away from flammable objects.</p>
                <h4>Enjoy Candles Safely:</h4>
                <p>Candles create a cozy and soothing ambiance, but it's essential to prioritize safety. Always follow the manufacturer's instructions, use candle accessories like trays or holders, and exercise caution when handling lit candles.</p>
                <br><br>
               <p> We hope these candle care tips enhance your candle burning experience, allowing you to enjoy the mesmerizing glow and captivating fragrance of our candles. Stay tuned for more helpful candle-related articles and inspiration on our blog.</p>
         <br><br><br> 
         <hr>
         
         <hr>
</div>
</div>
<?php
require_once "includes/db_connection.php";
$query = "SELECT * FROM articles ORDER BY datepublished DESC LIMIT 4";
$result = $db_connect->query($query);

// Display the articles
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="blog">';
        echo '<div>';
        echo '<h3>' . $row["title"] . '</h3>';
        echo '<p><sub>' . $row["datepublished"] . '<br>By: ' . $row["authorName"] . '</sub></p><br>';
        echo '<p>' . $row["content"] . '</p>';
        echo '<br><br><br>';
        echo '<hr>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No articles found.";
}
?>

<div class="blog">
    <form action="insertBlog.php" method="post" autocomplete="off">
        <p><h4>Want to create a blog?</h4></p><br>
        <p>Author's Full Name</p><br>
        <input type="text" name="author"><br><br>
        <p>Article Title</p><br>
        <input type="text" name="article_title"><br><br>
        <p>Article Text:</p><br>
        <textarea name="article_text" rows="7" placeholder="Article Content..."></textarea><br><br>
        <button name="submit">Publish Article</button><br><br>
   
    </p><br><br><br>
    </form>
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
