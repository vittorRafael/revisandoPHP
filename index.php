<?php
  include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Fomulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
  </head>
  <body>
    <p>Formulário para inscrição de competição</p>
    <form class="" action="script.php" method="post">
      <?php
          $mensagemDeErro = obterMensagemErro();
          if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
          }
          $mensagemDeSucesso = obterMensagemSucesso();
          if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
          }
      ?>
      <p> Seu Nome: <input type="text" name="nome" /></p>
      <p> Sua Idade: <input type="text" name="idade" /></p>
      <p><input type="submit" value="Enviar Dados"/></p>
    </form>
  </body>
</html>
