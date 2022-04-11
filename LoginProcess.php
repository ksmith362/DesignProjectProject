<?php
$username=mysqli_real_escape_string($connection, $_POST["username"]);

$password=mysqli_real_escape_string($connection, $_POST["password"]);




 
 



$sql = "SELECT username, id FROM users WHERE username ='$username' and password = '$password'";
$result = mysqli_query($connection,$sql) or die("Query unsuccessful") ;
      if (mysqli_num_rows($result) > 0 ) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $username; 
        $_SESSION["user_id"]=$row["id"];
        header('Location: VerificationProcess.php');
         
      } else {
             header('Location: WrongInformation.php');

      }


while($row=mysqli_fetch_assoc($res)){
	echo "<br " . $row["ID"] . " " . $row["Name"] . "<br />";
}

?>