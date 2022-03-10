<?php
session_start();

$connection=mysqli_connect("localhost", "root" , "root", "twitter");

$username=mysqli_real_escape_string($connection, $_POST["username"]);

$password=mysqli_real_escape_string($connection, $_POST["password"]);



 
 



$sql = "SELECT username FROM users WHERE username ='$username' and password = '$password'";
$result = mysqli_query($connection,$sql) or die("Query unsuccessful") ;
      if (mysqli_num_rows($result) > 0 ) {
        $_SESSION["username"] = $username; 
    
        header('Location: VerificationProcess.php');
         
      } else {
             header('Location: WrongInformation.php');

      }


$res=mysqli_query($connection,"select * from users");
while($row=mysqli_fetch_assoc($res)){
	echo "<br " . $row["ID"] . " " . $row["Name"] . "<br />";
}

?>