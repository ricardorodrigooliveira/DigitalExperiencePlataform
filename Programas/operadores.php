<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(4==4){
        echo "quatro é igual a quatro, verdade!";
      }
      echo "<br>";

      if (4 != 4){
        echo "quatro não é diferente de quatro, verdade!";
      }
      echo "<br>";

      if(4 === 4){ //identico, compara também o tipo
        echo "quatro é identico a quatro";
      }
      echo "<br>";

      if(4 < 5 || 4 == '4'){
        echo "umas das condições é verdade";
      }
      echo "<br>";

      if(4 == '4' && 4 === 4){
        echo "todas as condições são verdadeiras";
      }

     ?>
  </body>
</html>
