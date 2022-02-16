<?php 


echo "Hello, ". $_POST["username"];



$connection = mysqli_connect("localhost", "root" , "root", "root", "users");

$username = mysqli_real_escape_string($connection, $_POST["username"]);

$password = mysqli_real_escape_string($connection, $_POST["password"]);

$firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);

mysqli_query($connection,"insert into users_seen (firstname, username, password) values ('$firstname', '$username', 'password')");






echo "<br /><br />Users already in the database: <br />";
$res = mysqli_query($connection,"select * from users_seen");
while($row = mysqli_fetch_assoc($res)){
	echo $row["id"] . " " . $row["firstname"] . "<br> />";
}

php?>