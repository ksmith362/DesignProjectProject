<?php
//This page pops up when the username they chose in already in use and the page tells the to choose another because it has already been taken. 
include("LoggedOutHeader.php");
?>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div class="content">
        <h2>Username already exists!</h2>
        <p>Choose a different username, the one you chose is already in use!</p>
        <div class="content">
          <img src="somethingElse.gif" alt="something else gif" width = "300" height = "auto">
        </div>
<?php 
    include("footer.php");
?>