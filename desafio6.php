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
      /*function megaSena(){
        for($i = 1; $i <= 6; $i++){
          $lista[] = rand(1, 60); //incrementa a lista com numeros aleatórios de 1 a 60
        }
        sort($lista); //Exibe em ordem crescente
        echo '<h1>' . 'Jogo Mega Sena' . '</h1>'. implode(" - ",$lista);
      }*/

      function megaSena(){
        for($i = 1; $i <= 6; $i++){
          $lista[] = rand(1, 60); //incrementa a lista com numeros aleatórios de 1 a 60
          sort($lista);
          $x = $i-1;
          if($lista[$x] = $lista[$i]){
            $lista[] = rand(1, 60);
          }
        }
        sort($lista); //Exibe em ordem crescente
        echo '<h1>' . 'Jogo Mega Sena' . '</h1>'. implode(" - ",$lista);
      }

        megaSena();

     ?>
  </body>
</html>
