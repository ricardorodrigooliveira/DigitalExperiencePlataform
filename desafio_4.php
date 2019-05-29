<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

  for($x = 1; $x <= 10; $x++){
    echo 'Tabuada do ' . $x . '<br>';
    for($y = 1; $y <= 10; $y++){
    echo $x . "x" . $y . "=" . ($x * $y) . "<br>";
    }
    echo "<br>";
  }

?>

  </body>
</html>
