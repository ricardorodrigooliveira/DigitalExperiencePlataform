<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /* Criar uma função que sorteia os números da Mega Sena.
         Exiba em ordem crescente como no exemplo abaixo:

         Os numeros sorteados da Mega sena são 26 - 34 - 37 - 51 - 55 - 59
      */
      function megaSena(){
        $lista = array();
        while(count($lista) < 6){
          $valor = rand(1,60);
          $lista[$valor] = $valor;
        }
        sort($lista); //Exibe em ordem crescente
        echo '<h1>' . 'Jogo Mega Sena' . '</h1>'. implode(" - ",$lista);
      }

      megaSena();

     ?>
  </body>
</html>
