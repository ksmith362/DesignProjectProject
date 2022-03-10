<?php


session_start();



    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

        header ('Location: Login.php');

    }else{

        header ('Location: Homepage2.php');
    }
    
    


?>