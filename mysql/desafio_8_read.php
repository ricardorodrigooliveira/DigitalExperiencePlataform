<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
  $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio');

  if(!$connect){
    die('Falha de conexão');
  }

  //QUERY PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIAVEIS
  $query = "SELECT * FROM oito";

  //FUNÇÃO QUE EXECUTA QUERIS
  $res = mysqli_query($connect, $query);
 ?>
   <div class="container">
     <div class="col-sm-6">
       <?php
         while($row = mysqli_fetch_assoc($res)){
       ?>

         <pre>

       <?php
           print_r($row);
       ?>
         </pre>
       <?php
         }
       ?>
     </div>
   </div>
  </body>
</html>
