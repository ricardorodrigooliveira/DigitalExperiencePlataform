<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $multiplicador = 0;
      $multiplicando = 0;
      $resultado = 0;

      for ($multiplicador=1; $multiplicador <= 10; $multiplicador++) {
        echo "<h3>"."Tabuada do " . $multiplicador . "<br>"."</h3>";
        for ($multiplicando=1; $multiplicando <= 10; $multiplicando++) {
          $resultado = $multiplicador * $multiplicando;
          echo $multiplicador . " x " . $multiplicando . " = " . $resultado . "<br>";
        }
        echo "<br>";
      }

     ?>
  </body>
</html>
