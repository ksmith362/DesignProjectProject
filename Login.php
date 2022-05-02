<!--This is the login page--->
<?php
	$_G_NO_LOGIN = true;
    include("LoggedOutHeader.php");
    
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
 <div class="content">
        <h2>Welcome to HashtagTwitter!</h2>
        <p>You can search any hashtag and find the 15 most recent tweets in the hashtag!</p>
        <div class="content">
          <form action="LoginProcess.php" method="POST">
            Username: <input  type="text" name="username" ><br ><br />
            Password: <input type= "text" name="password" ><br ><br ><br />
            <button  id="uniqueButton" type="value" class="buttonStyle">Login</button>
          </form>
          <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>
        <?php
        include ("footer.php");
    ?>