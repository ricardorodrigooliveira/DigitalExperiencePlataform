<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function digaAlgo(){
        echo "Ontem o corinthians perdeu!";
      }

      //digaAlgo();

      function calculadora(){
        echo 1+1;
      }

      //calculadora();
      function init(){
        digaAlgo();
        echo "<br>";
        calculadora();
      }

      //init();

      function calculaMedia(){
        $nome = $_GET["nome"];
        //$disciplina = $_GET["disciplina"];
        $nac = $_GET["nac"];
        $ps = $_GET["ps"];
        $am = $_GET["am"];

        $nome = $_GET['nome'];

        $media = (($nac*0.2)+($ps*0.3)+($am*0.5));

        return $media;

      }
     ?>
  </body>
</html>
