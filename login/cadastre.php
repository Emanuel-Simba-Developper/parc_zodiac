<?php

    include("conexao.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="INSERT INTO cadastre(email, password) VALUES('$email', '$password')";

    if(mysql_query($conexao, $sql)){
        echo" User enregistré";
    }
    else{
        echo" error ". mysql_connect_error($conexao);
    }
    mysql_close($conexao);
?>