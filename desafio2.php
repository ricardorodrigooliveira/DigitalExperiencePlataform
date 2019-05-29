<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $assinatura = 12.90;
      $impostos = 0.04;  //apenas maior que 90 interurbanos
      $totalImposto = 0;
      $custoChamadasCelular = 0.20; //por pulsos
      $valorTotal = 0;
      $qtdInterurbanos = 120;
      $chamadasCelular = 37;
      $qtdLigacoesGratis = 90;
      $pulsos = ($qtdInterurbanos-$qtdLigacoesGratis);


      $totalImposto = $pulsos*$impostos; //R$5,08

      $valorTotal = $assinatura + $totalImposto + ($chamadasCelular*$custoChamadasCelular);

      echo "Impulsos cobrados.................. " . ($pulsos)."<br>";
      echo "Valor Impostos................... R$" . number_format($totalImposto,2,",",".")."<br>";
      echo "Valor total...................... R$" . number_format($valorTotal,2,",",".")."<br>";

     ?>
  </body>
</html>
