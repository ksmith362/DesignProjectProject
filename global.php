<!---contains all database connection & session_start--->
<?php

session_start();
$connection=mysqli_connect("localhost", "root" , "root", "twitter");
if ((!(isset($_SESSION['username'])) && $_G_NO_LOGIN != true)) {
	header('Location: CantDoThat.php');
}else{
}
?>