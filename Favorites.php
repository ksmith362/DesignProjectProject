<?php

include("header.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div class="content">
  <h2>Favorite Hashtags</h2>
  <p>Here are all the hashtags that you have saved:</p>
  <?php
  $connection=mysqli_connect("localhost", "root" , "root", "twitter");
  $user_id = $_SESSION['user_id'];
  $res=mysqli_query($connection,"select * from favoritehashtags WHERE user_id = $user_id");
  while($row=mysqli_fetch_assoc($res)){
  
  echo "<br> " .$row["hashtag"] . "<br />";
  }

  ?>
  <br>
  <div class="text-box">
    <form action="FavoritesProcess.php" method = "POST">
      <input type="text" name = "hashtag">
      <button type="value">Save</button>
    </form>
    <div class="deleteHashtags">
      <h2>Delete Hashtags From Favorite Hashtags:</h2>
      <div class="text-box">
        <form action="DeleteHashtagProcess.php" method = "POST">
          <input type="text" name = "hashtag">
          <button type="value">Delete</button>
        </form>
      </div>
      <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
    </div>
    <?php
    include("footer.php");
    ?>

