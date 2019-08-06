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
  $connect = mysqli_connect('localhost', 'root', 'labfiap$2018', 'desafio');

  if(!$connect){
    die('Falha de conexão');
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  //QUERY
  $query = "INSERT INTO oito(username, password, email) VALUES ('$username', '$password', '$email')";

  //FUNÇÃO QUE EXECUTA QUERIS
  $res = mysqli_query($connect, $query);

  //VALIDAÇÃO
  if(!$res){
    echo 'Erro na inclusão SQL';
  } else{
    echo 'Inclusão realizada com sucesso';
  }
}
 ?>
  <div class="container">
    <div class="col-sm-6">
      <form action="desafio_8.php" method="post">

        <div class="form-group">
          <label>Usuário</label>
          <input type="text" name="username" class="form-control"/>
        </div>

        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" class="form-control"/>
        </div>

        <input class="btn btn-primary" type="submit" name="enviar" value="Enviar"/>
      </form>
    </div>
  </div>
  </body>
</html>
