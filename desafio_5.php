<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  function converteCelsius($c){
    return ($c * 1.8) + 32;
  }

  echo 'A temperatura em Graus Fahrenheit é: ' . converteCelsius(32) . "Fº";


?>

  </body>
</html>
