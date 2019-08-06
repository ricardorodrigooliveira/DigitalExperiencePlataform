<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
if(isset($_POST['enviar'])){
  //CONEXÃO
  $connect = mysqli_connect('localhost', 'root', '', 'exemplo');//banco, usuario, senha, tabela

  if(!$connect){
    echo 'Falha de conexão';
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  //QUERY PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIAVEIS
  $query = "update usuario set ";

  //FUNÇÃO QUE EXECUTA QUERIS
  $res = mysqli_query($connect, $query);

  //VALIDAÇÃO
  if(!$res){
    echo 'Erro na alteração do usuario';
  } else{
    echo 'Alteração realizada com sucesso';
  }
}
 ?>

<div class="container">
  <div class="col-sm-6">
    <form action="login_create.php" method="post">

      <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="username" class="form-control"/>
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control"/>
      </div>

      <select name="id">
        <option value="1">1</option>
      </select>
      <input class="btn btn-primary" type="submit" name="enviar" value="Enviar"/>
    </form>
  </div>
</div>

  </body>
</html>
