<?php 


echo "Hello, ". $_POST["Username"];



$connection = mysqli_connect("localhost, "root" , "root", "root", "users")



$firstname = mysqli_real_escape_string($connection, $_POST["firstname"]);
mysqli_query($connection,"insert into users_seen (firstname) values ('$firstname')");



$username = mysqli_real_escape_string($connection, $_POST["username"]);
mysqli_query($connection,"insert into users_seen (username) values ('$firstname')");



$password = mysqli_real_escape_string($connection, $_POST["password"]);
mysqli_query($connection,"insert into users_seen (password) values ('$password')");



echo "<br /><br />Users already in the database: <br />;
$res = mysqli_query($connection,"select * from users_seen");
while($row = mysqli_fetch_assoc($res)){
	echo $row["id"] . " " . $row["firstname"] . "<br> />";
}
