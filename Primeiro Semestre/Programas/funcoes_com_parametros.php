<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function somar($x, $y){
        return $x + $y;
      }

      function subtrair($x, $y){
        return $x - $y;
      }

      function multiplicar($x, $y){
        return $x * $y;
      }

      function dividir($x, $y){
        return $x / $y;
      }

      function eqPriGrau($x, $y, $z){
        return $x + $y * $z;
      }

      echo somar(1,7) . "<br>";
      echo subtrair(5,2) . "<br>";
      echo multiplicar(2,2) . "<br>";
      echo dividir(4,2) . "<br>";
      echo eqPriGrau(2, 2, 2) . "<br>";

     ?>
  </body>
</html>
