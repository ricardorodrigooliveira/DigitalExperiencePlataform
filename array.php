<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $listaNumeros = array(17, 234, 45, 2, 8);
      //echo não imprime array

      print_r($listaNumeros); //imprime o array todo

      echo "<br>";

      echo $listaNumeros[1];

      echo "<br>";

      $nomes = array('Ricardo', 'Leandro', 'Claudio', 'Mudo');

      print_r($nomes);

      echo "<br>";

      echo $nomes[0];

      //Arrays associativos

      $nomes2 = array("primeiro_nome" => 'Ricardo',"segundo_nome" => 'Leandro', "terceiro_nome" => 'Claudio', "quarto_nome" => 'Mudo');
      echo "<br>";
      print_r($nomes2);

      
     ?>
  </body>
</html>
