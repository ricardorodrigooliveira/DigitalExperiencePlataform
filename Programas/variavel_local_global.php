<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
  $variavel_externa = "fora";
  function teste(){
    global $variavel_externa;

    $variavel_externa = "dentro";
  }
  echo $variavel_externa . "<br>";
  echo teste();
  echo $variavel_externa;
 ?>

  </body>
</html>
