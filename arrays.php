<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php

$listaNumeros = array(17, 234, 45, 2, 8);

//echo $listaNumeros;

print_r($listaNumeros);
echo "<br>";
echo $listaNumeros[2];

$nomes = array('Gustavo', 'Eduardo', 'Diogo');

print_r($nomes);
echo "<br>";
echo $nomes[0];

// Arrays Associativos

$nomes2 = array("primeiro_nome" => 'Amanda',
"segundo_nome" => 'Rita',
"terceiro_nome" => 'Regina');
echo "<br>";
print_r($nomes2);

echo "<br>";

echo $nomes2['segundo_nome'];

?>

  </body>
</html>
