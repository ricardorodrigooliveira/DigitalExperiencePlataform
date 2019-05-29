<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $lista = [9, 27, 1, 42, 14, 70, 6565];

      // Funçao que exibe o maior numero de array
      echo max($lista) . "<br>";

      // Função que exibe o menor numero
      echo min($lista) . "<br>";

      // ordem crescente
      sort($lista);

      print_r($lista);

      // 
     ?>
  </body>
</html>
