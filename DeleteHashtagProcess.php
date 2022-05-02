<?php
session_start();
$connection=mysqli_connect("localhost", "root" , "root", "twitter");

$user_id = $_SESSION['user_id'];

$hashtag=mysqli_real_escape_string($connection, $_POST["hashtag"]);


//This is the process page where it deletes the hashtag from the database for the user



$sql = "DELETE FROM favoritehashtags WHERE hashtag = '$hashtag' and user_id = $user_id";
echo $sql;
if (mysqli_query($connection, $sql)) {
    header("Location: Favorites.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

