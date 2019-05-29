<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $totalAulas = 70;
      $totalFaltas = 18;
      $notaNac = 7;
      $notaAM = 8.7;
      $notaPs = 6.2;

      $notaFinal = ($notaNac*0.2) + ($notaAM*0.3) + ($notaPs*0.5);

      $faltasPermitidas = $totalAulas*0.2;

      if ($notaFinal >= 6 && $faltasPermitidas >= $totalFaltas) {
        echo "Sua nota foi " . $notaFinal . " Parabéns, você foi APROVADO!";
      } elseif ($notaFinal >= 6 && $faltasPermitidas < $totalFaltas) {
        echo "Sua nota foi " . $notaFinal . " mas voce foi reprovado por faltas";
      } else {
        echo "Sua nota foi " . $notaFinal . " mas voce foi reprovado";
      }

     ?>
  </body>
</html>
