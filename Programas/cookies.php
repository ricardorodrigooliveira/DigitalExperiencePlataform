<?php
  //Função setcookies possue 3 parametros
  //norme
  //valor
  //tempo de expiração
  $nome = "NomeDoCookie";
  $valor = 100;
  $expira = time () + (60 * 60 * 24 * 7);
  setcookie($nome, $valor, $expira); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE['NomeDoCookie'])){
        $nomeCookie = $_COOKIE['NomeDoCookie'];
        echo $nomeCookie;
      } else {
        echo "";
      }
    ?>
  </body>
</html>
