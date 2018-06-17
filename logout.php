<?php
    session_start();
    // Delt var session
    unset($_SESSION["user_portal"]);
    header("location: login.php");
?>