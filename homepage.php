<?php
    include("header.php");  
?>

<div class="welcomeText">
            <h2>Welcome to HashtagTwitter!</h2>
            <p>You can search any hashtag and find the 15 most recent tweets in the hashtag!</p>
            <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>
        <div class="content">
            <div class="saved-hashtags">
                <h2>Your Favorite Hashtags:</h2>
                <?php
                $connection=mysqli_connect("localhost", "root" , "root", "twitter");
                $res=mysqli_query($connection,"select * from favoritehashtags");
                while($row=mysqli_fetch_assoc($res)){
                
                echo "<br> " .$row["hashtag"] . "<br />";
                }
                ?>
            </div>
        </div>
<?php 
    include("footer.php");
?>