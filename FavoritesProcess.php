<?php
session_start();
$connection=mysqli_connect("localhost", "root" , "root", "twitter");
$hashtag=mysqli_real_escape_string($connection, $_POST["hashtag"]);
$user_id=mysqli_real_escape_string($connection, $_POST["user_id"]);


$user_id = $_SESSION['user_id'];

mysqli_query($connection,"insert into favoritehashtags (user_id, hashtag) values ('$user_id', '$hashtag')") or die(mysqli_error($connection));

header('Location: Favorites.php');
