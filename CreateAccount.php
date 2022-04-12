<?php
    include("LoggedOutHeader.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
 <div class="content">
        <h2>Welcome to HashtagTwitter!</h2>
        <p>You can search any hashtag and find the 15 most recent tweets in the hashtag! Just need to make an account first. So...make an account. Do it. Right now.</p>
        <div class="content">
          <form action="RegisterProcess.php" method="POST">
            Name: <input type="text" name="name" ><br ><br />
            Username: <input  type="text" name="username" ><br ><br />
            Password: <input type= "text" name="password" ><br ><br ><br />
            <button type="value">Create Account</button>
          </form>
          <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>
<?php 
    include("footer.php");
?>