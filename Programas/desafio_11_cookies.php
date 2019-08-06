<?php

  if(isset($_COOKIE['cookie_teste'])){
    echo "voce já passou por aqui";
  }else{
    echo "você nunca passou por aqui";
    setcookie('teste','cookie Passou',time() + 3600);
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
