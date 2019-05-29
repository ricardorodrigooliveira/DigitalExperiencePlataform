<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>

    <?php
      //$_post: super global (variável definida pelo php) funciona como array assosiativo
      if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
      }

      //$nomes = array('Ricardo','Anelisa','Guilherme','Manuela');

      if(strlen($usuario) < 5 || strlen($usuario) > 10){
        echo "usuario invalido";
      }
      /*}elseif ($senha < 4) {
        echo 'Senha invalida';
      }elseif (!strstr($email,'@')) {
        echo "email invalido";
      }elseif (strlen($estado) != 2) {
        echo 'estado invalido';
      }else{
        echo 'Bem vindo ' . $usuario;
      }*/


    ?>

  </body>
</html>
