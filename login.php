<?php
include_once ('connect.php');

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "INSERT INTO USUARIO VALUE ('$name', AES_ENCRYPT('$password','zeus'))";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <title>Titulo</title>
  <link rel="stylesheet" href="estilo.css">
  <meta charset="utf-8">

 </head>

 <body>
 <h1>Confirmação de cadastro</h1>
            <hr><br><br>

            <?php
            
            if($linhas == 1){
               print "Cadastro efetuado com sucesso";
              
            }else{
                print"Cadastro não efetuado.";
            }

            ?>
            <br><br><a href="index.html">Inicio</a>
</body>