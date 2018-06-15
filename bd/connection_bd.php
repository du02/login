<?php
   
   // Connect in Database
    $serv = "localhost";
    $user = "root";
    $pass = "";
    $bd = "login";

    $connect = mysqli_connect($serv, $user, $pass, $bd);

    // Test erro
    if (mysqli_connect_errno()){
        die("Erro in Conection") . mysqli_connect_errno();
    }

?>