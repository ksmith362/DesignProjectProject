<?php


session_start();



    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

        header('Location: CantDoThat.php');

    }else{

       
    }

?>

<!DOCTYPE html>
<html>
<head>
</marquee>
<style>

<link rel="stylesheet" href="https://use.typekit.net/osn2stl.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.footer {
  background-color: #cfbaf0;
  padding: 10px;
  width: 100%;

}

.topnav {
  overflow: hidden;
  background-color: #cfbaf0;
  font-family: input-serif,serif;
font-weight: 400;
font-style: normal;
}

.topnav a {
  float: left;
  display: block;
  color: #534a60;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #faf8fe;
  color: #534a60;
}

.topnav a.active {
  background-color: #BAA5FF;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}


.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #BAA5FF;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.content {
  background-color: #e7ddf8;
  height: 680px; 
  width: 100%;
  text-align: center;
}


</style>
</head>
<body>


<div class="content">

<div class="topnav">
  <a class="active" href="Homepage2.php">Home</a>
  <a href="LogoutProcess.php">Logout</a>
  <a href="Favorites.php">Favorite Hashtags</a>
  <a href="/////makesomethinghere**********">Click for a Suprise</a>
  <div class="search-container">
    <form action="SearchedHashtag.php" method="POST">
      <input type="text" placeholder="Search.." name="SearchedHashtag">
      <button type="value">Submit</button>
    </form>
  </div>
</div>
<div class="content">
  <h2>Favorite Hashtags</h2>
  <p>Here are all the hashtags that you have saved</p>
  <form action = "FavoritesProcess.php" method = "POST">
    <input type = "text" name = "hashtag">
    <button type = "value">Save</button>
  </form>
  <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
</div>
<div class="footer">
  <marquee behavior="scroll" direction="right" scrollamount="10"> HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter</marquee>
</marquee>


