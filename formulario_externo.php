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

        /*if($usuario && $senha){
          echo "Bem Vindo!" . $usuario;
        }else{
          echo "Nenhum campo pode estar vazio";
        }*/
      }

      $nomes = array('Ricardo','Anelisa','Guilherme','Manuela');

      if(strlen($usuario) < 5 && $usuario != '') {//strlen conta quant. caracteres
        echo "Informe um nome maior";
      }
      if($usuario && $senha){
        if(strlen($usuario) > 12) {
          echo "nome muito grande";
        }
        if(!in_array($usuario, $nomes)){
          "voce não tem permissão";
        }else{
          echo "bem vindo ". $usuario;
        }
      }else{
        echo "Deve informar usuário e senha";
      }
    ?>

  </body>
</html>
