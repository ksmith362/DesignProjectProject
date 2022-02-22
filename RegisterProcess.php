<?php 


echo "Hello, ". $_POST["username"];



$connection=mysqli_connect("localhost", "root" , "root", "twitter");

$username=mysqli_real_escape_string($connection, $_POST["username"]);

$password=mysqli_real_escape_string($connection, $_POST["password"]);

$name=mysqli_real_escape_string($connection, $_POST["name"]);

//User is already in the goolog
$exists = mysqli_query($conn, "select ID from crud where ID = '$ID ");
if(mysqli_num_rows($exists) > 0){
	echo("Already exists dummy!");
}
else{
	if($_server["request_method"] == "POST"){
		$result = mysqli_query ($conn, "insert into crud (ID, name, username, password) values ('$ID', '$name', '$username', $password'));
	}
}




mysqli_query($connection,"insert into users (name, username, password) values ('$name', '$username', '$password');






echo "<br /><br />Users already in the database: <br />";
$res=mysqli_query($connection,"select * from users");
while($row=mysqli_fetch_assoc($res)){
	echo $row["ID"] . " " . $row["Name"] . "<br />";
}
