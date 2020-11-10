<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <title>Titulo</title>
  <link rel="stylesheet" href="estilo2.css">
  

  </head>

  <body>

  <div class="button"> 
        <form method="get" action="index.html">
            <button type="submit">Cadastro</button>
        </form>
  </body>
</html>
<?php
include_once ('connect.php');

$sql = "select nome, aes_decrypt(senha,'zeus') from USUARIO";

$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

print('<div class="container"> ');

while($exibirRegistros = mysqli_fetch_array($consulta)){
    $nome = $exibirRegistros[0];
    $senha = $exibirRegistros[1];

    print('<table border="1">');
   
    print ('<tr>');
    print('<th>');
    print $nome;
    print('</th>');
    print('<td>');
    print $senha;
    print('</td>');
}

print('</div>');
mysqli_close($conexao);

?>

