<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bbdd = "correosagua";
    $conn = new mysqli($servidor,$usuario,$password,$bbdd);
    mysqli_set_charset($conn, 'utf8');
    
?>