<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function convertTemp($x){
        $f = $x*1.8+32;
        return $x . "° Celcius convertido é igual a " . $f . "° fahrenheit";
      }

      echo convertTemp(32);

     ?>
  </body>
</html>
