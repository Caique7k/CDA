<?php
    $hostname = "localhost";
    $database = "CDA";
    $user = "root";
    $password = "";

    $mysqli = new mysqli($hostname, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else{
        echo"conexao realizada com sucesso";
    }
?>

