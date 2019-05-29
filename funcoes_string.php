<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $string = "O carnaval está chegando";

      // Função que conta a quantidade de caracteres
      echo strlen($string);
      echo "<br>";

      // Converte em maiusculo
      echo strtoupper($string);
      echo "<br>";

      // Converte em minusculo
      echo strtolower($string);
      echo "<br>";

      if(!strstr($string, "!")){
        echo "Não tem ponto de exclamação na frase";
      } else {
        echo "Tem ponto de exclamação na frase";
      }

     ?>
  </body>
</html>
