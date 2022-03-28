<?php 

$connection=mysqli_connect("localhost", "root" , "root", "favorites");

$hashtag=mysqli_real_escape_string($connection, $_POST["hashtag"]);



 

//User is already in the goolog

$sql = "SELECT username FROM users WHERE username='$username'";
$result = mysqli_query($connection,$sql) or die("Query unsuccessful") ;
     



mysqli_query($connection,"insert into FavoriteHashtags (user_id, favoritehashtags) values ('$user_id', '$favoritehashtags')");





