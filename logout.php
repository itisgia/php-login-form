<?php

    session_start(); // should alawys be on the top.
    echo ($_SESSION['username']);
    unset($_SESSION['username']); // removes all session variables

    echo ('You have cleaned the session');
    header('Refresh:1; URL = index.php');
    // Refresh : show the echo for a sec and go back to index.php page

 ?>
