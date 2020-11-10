<?php

$hostname = "0.0.0.0";
$user = "root";
$password = "admin";
$database = "bts";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao) {
    echo("Falha na conexão com banco de dados");
}

?>
