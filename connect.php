<?php

$hostname = "192.168.4.53";
$user = "root";
$password = "british@admin";
$database = "bts";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao) {
    echo("Falha na conexão com banco de dados");
}

?>