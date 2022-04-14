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
        $hashtag= $_GET["hashtag"];
        $connection=mysqli_connect("localhost", "root" , "root", "twitter");
        $user_id = $_SESSION['user_id'];
        $res=mysqli_query($connection,"select * from favoritehashtags WHERE user_id = $user_id");
        while($row=mysqli_fetch_assoc($res)){
        
        /*echo "<br> " .$row['hashtag'] . "<br />";

       
        echo " <a href=>'.$hashtag.'</a>";
        
        $url = 'http://localhost:8888/ksmith-CSIS3126/searchedHashtag.php';
        echo $_GET['url'];

        echo <a href=$row['hashtag'];

        <a href='<?php echo $url; ?>'
        target='_blank'><?php "<br> " .$row['hashtag'] . "<br />"?> </a><br/> */

        /*echo "<a href='searchedHashtag.php' target='_blank'>$row['hashtag']</a>"; */
        ?>
        <a href="searchedHashtag.php?hashtag=<?php echo $row["hashtag"]?>"><?php echo $row["hashtag"]?><br></a>
        <?php 

        }
   /*"Something " . $variable . " something";*/
        
        ?>
       

      
    </div>
</div>
<?php
include("footer.php");
?>