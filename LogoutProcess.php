<?php
//This process stops the session and brings the user to a page confirming they were successfully logged out.
session_start();
session_destroy();
header ('Location: SuccessfullyLoggedOut.php');
?>