<?php

    $servidor="localhost";
    $user="root";
    $password="";
    $bdname="bd_zodic";

    $conexao =mysqli_connect($servidor, $user, $password, $bdname);
    if(!$conexao){
        die("Error inattendu: " .mysql_connect());
    }

?>