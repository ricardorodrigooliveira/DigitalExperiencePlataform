<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

<?php
/*
Conta Telefônica - Uma conta telefônica é composta
dos seguintes custos:

Assinatura: R$12,90.
Impulsos:    R$0,04 (por impulso que exceder 90 interurbanos)
Chamadas para celular: R$ 0,20 por Impulso.

Sabendo que Maria Lucia ligou 247 vezes no mês,
sendo 120 interurbanos e 37 ligações para celular
Qual o valor total da conta?
*/

$valor_assinatura = 12.90;
$valor_impulso_extra = 0.04;
$valor_impulso_celular = 0.2;

$total_ligacoes_interurbano = 120;
$total_ligacoes_celular = 37;
$interurbanos_sem_cobrar = 90;

// Forma 1 de resolver

/*
echo "O valor total da conta da Maria Lucia é: R$ " .
($valor_assinatura + (($total_ligacoes_interurbano -
$interurbanos_sem_cobrar) * $valor_impulso_extra) +
($total_ligacoes_celular * $valor_impulso_celular));
*/
// Forma 2 de resolver

$valor_interurbano = (($total_ligacoes_interurbano -
$interurbanos_sem_cobrar) * $valor_impulso_extra);

$valor_celular = $total_ligacoes_celular * $valor_impulso_celular;

$valor_total = $valor_assinatura + $valor_interurbano
+ $valor_celular;

$valor_formatado = number_format($valor_total, 2, ',', '.');


echo "O valor total da conta de telefone é
R$ $valor_formatado";




?>

  </body>
</html>
