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
        background-color: #baa5ff;
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
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
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
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
        }
        .topnav input[type=text] {
        border: 1px solid #ccc;
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
        }
        .content {
        background-color: #e7ddf8;
        height: 700px;
        width: 100%;
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
        }
        .saved-hashtags h2{
        float: right;
        background-color: #e7ddf8;
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
        padding-left: 20px;
        }
        .welcomeText{
        float: right;
        background-color: #e7ddf8;
        font-family: input-serif,serif;
        font-weight: 400;
        font-style: normal;
        padding-left: 20px;
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
                        <input type="text" placeholder="Search.." name="searchedHashtag">
                        <button type="value">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="welcomeText">
            <h2>Welcome to HashtagTwitter!</h2>
            <p>You can search any hashtag and find the 15 most recent tweets in the hashtag!</p>
            <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>
        <div class="content">
            <div class="saved-hashtags">
                <h2>Your Favorite Hashtags:</h2>
                <?php
                $connection=mysqli_connect("localhost", "root" , "root", "favorites");
                $res=mysqli_query($connection,"select * from favoritehashtags");
                while($row=mysqli_fetch_assoc($res)){
                
                echo "<br> " .$row["hashtag"] . "<br />";
                }
                ?>
            </div>
        </div>

                <div class="footer">
                    <marquee behavior="scroll" direction="right" scrollamount="10"> HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter</marquee>
                    </marquee>