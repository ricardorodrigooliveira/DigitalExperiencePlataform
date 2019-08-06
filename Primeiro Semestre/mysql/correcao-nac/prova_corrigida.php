<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

    <?php

    echo "<h2> Questão 1:</h2>";
    echo "C) $";

    echo "<br>";

    echo "<h2> Questão 2:</h2>";
    echo "D) I, III, IV";

    echo "<br>";

    echo "<h2> Questão 3:</h2>";
    /*
	Antonio tem 1,50m e cresce 2 centímetros por ano, enquanto Bernardo tem 1,20m e cresce 3 centímetros por ano. Construa um programa em PHP que mostre em quantos anos serão necessários para que Bernardo seja maior que Antonio.*/

    $antonio = 1.5;
    $bernardo = 1.2;

    $i = 0;

        while ($bernardo < $antonio) {
                $bernardo = $bernardo + 0.03;
                $antonio = $antonio + 0.02;
                $i++;
            }

    echo "Serão necessários $i anos.";

    echo "<br>";

    echo "<h2> Questão 4:</h2>";

    /*
    Baseado no Array contendo 7 números, responda as questões abaixo:
    [String] = ["85","48","31","75","64","13","45"];
    (com respostas desenvolvidas com scripts de programação em PHP)
  */
     $lista = array(85,48,31,75,64,13,45);

echo "a) Maior número: ";
echo max($lista);
echo "<br>";
echo "b) Menor número: ";
echo min($lista);
echo "<br>";
echo "c) Impressão da lista: ";
print_r($lista);
echo "<br>";
echo "d) Ordem crescente: ";
sort($lista);
    print_r($lista);
echo "<br>";


    echo "<h2> Questão 5:</h2>";
    /*
    Robson viaja na próxima semana para os EUA e precisa comprar US$ 930,00. Com as condições apresentadas abaixo, crie uma função que exiba o valor total em REAL que ele desembolsará. (1,0)

        Resumo da compra:
        Papel moeda: US$ 930.00
        Taxa de câmbio: R$ 3,409219
        IOF: 1.10%
        Frete: R$ 40,00
        Valor Total: ?
    */



    function conversaoDolar($dolar, $taxa, $iof){
        $real = ($dolar * $taxa);
        $valor_total = ($real + ($real * $iof));
        return $valor_total;
    }

    echo conversaoDolar(930, 3.409219, 0.011);
    echo "<br>";


    /*
    Rosana pesa 79kg e sua altura é 1,66m, com base na fórmula do IMC, calcule o índice de massa corpórea através de uma função e imprima uma mensagem (através de uma estrutura condicional) de acordo com a faixa que se encontra:
    */
     
    function IMC($peso, $altura){
        return $peso / (pow($altura,2));
      }

      $IMCRosana = IMC(79, 1.66);
      echo "IMC = " . $IMCRosana . "<br>";

    if($IMCRosana<18.5){
        echo "Abaixo do Peso";
      }elseif($IMCRosana>=18.5 && $IMCRosana<25){
        echo "Peso Normal";
      }elseif($IMCRosana>=25 && $IMCRosana<30){
        echo "Acima do Peso";
      }else{
        echo "Obeso";
      }
      echo "<br>";

    ?>

    <h2> Questão 6:</h2>

    <form action="validacao.php" method="post">

    Nome: <input type="text" placeholder="" name="nome"> <br>
    Telefone: <input type="tel" placeholder="" name="telefone"> <br>
    E-mail: <input type="email" name="email"> <br>
    Assunto: <input type="text" name="assunto"> <br>
    12 + 3 = <input type="text" name="conta"> <br>

    <input type="submit" name="enviar">



</form>




</body>
</html>
