<?php 
    // Session start 
    session_start();

    //Protect pag
    if(!isset($_SESSION["user_portal"])){
      header("location:login.php");
    }

    // Add in all page back.
?>