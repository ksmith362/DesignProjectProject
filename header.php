<!----contains all the common html elements before the body--->
<?php
include("global.php");
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.typekit.net/osn2stl.css">
<link rel="stylesheet" href="style.text/css"/>
 <div class="content">
            <div class="topnav">
                <a class="active" href="Homepage.php">Home</a>
                <a href="LogoutProcess.php">Logout</a>
                <a href="Favorites.php">Favorite Hashtags</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Click for a Suprise</a>
                <div class="search-container">
                    <form action="searchedHashtag.php" method="POST">
                        <input type="text" placeholder="Search.." name="searchedHashtag">
                        <button type="value">Submit</button>
                    </form>
                </div>
            </div>
        </div>