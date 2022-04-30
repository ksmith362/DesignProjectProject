<?php 
$_G_NO_LOGIN = true;
include ("global.php");
$username=mysqli_real_escape_string($connection, $_POST["username"]);


$password=mysqli_real_escape_string($connection, $_POST["password"]);


$name=mysqli_real_escape_string($connection, $_POST["name"]);



 

//User is already in the goolog

$sql = "SELECT username FROM users WHERE username='$username'";
$result = mysqli_query($connection,$sql) or die("Query unsuccessful") ;
      if (mysqli_num_rows($result) > 0) {
        header("Location: PickAnother.php");
      } else {
             mysqli_query($connection,"insert into users (name, username, password) values ('$name', '$username', '$password')");
             header('Location: Login.php');
             echo "Hello, ". $_POST["username"];

      }


$res=mysqli_query($connection,"select * from users");
while($row=mysqli_fetch_assoc($res)){
echo "<br " . $row["ID"] . " " . $row["Name"] . "<br />";
}
?>