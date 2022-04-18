<?php
include("header.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div class="welcomeText">
    <h2>Welcome to HashtagTwitter!</h2>
    <p>You can search any hashtag and find the 15 most recent tweets in the hashtag!</p>
    <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
</div>
<div class="content">
    <div class="saved-hashtags">
        <h2>Your Favorite Hashtags:</h2>
        <?php
        //gets hashtags from database and displays them on the homepage with links to have it redirect to automatically searchedHashtag.php
        $hashtag= $_GET["hashtag"];
        $connection=mysqli_connect("localhost", "root" , "root", "twitter");
        $user_id = $_SESSION['user_id'];
        $res=mysqli_query($connection,"select * from favoritehashtags WHERE user_id = $user_id");
        while($row=mysqli_fetch_assoc($res)){
        ?>
        <a href="searchedHashtag.php?hashtag=<?php echo $row["hashtag"]?>"><?php echo $row["hashtag"]?><br></a>
        <?php
        }
        
        ?>
        
        
    </div>
</div>
<?php
include("footer.php");
?>