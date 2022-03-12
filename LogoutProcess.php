<?PHP
    session_start();
    session_destroy();

    header ('Location: SuccessfullyLoggedOut.php');
?>