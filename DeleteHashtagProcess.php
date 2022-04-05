<?php
session_start();
$connection=mysqli_connect("localhost", "root" , "root", "favorites");
mysqli_real_escape_string($connection, $_POST["hashtag"]) = $hashtag;

mysqli_real_escape_string($connection, $_POST["user_id"]) = $user_id;

$user_id = $_SESSION['user_id'];

mysqli_query($connection,"delete from favoritehashtags (user_id, hashtag) values ('$user_id', '$hashtag')") or die(mysqli_error($connection));
header('Location: favorites.php');
