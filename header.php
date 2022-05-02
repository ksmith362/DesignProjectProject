<!---header.php is included for all pages that need the top naviagation coded below.-->
<?php
include("global.php");
?>
<!DOCTYPE html>
<html>
<!--this is my stylesheet for the fonts I used throughout the web app--->
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
					<button >Submit</button>
				</form>
			</div>
		</div>
	</div>