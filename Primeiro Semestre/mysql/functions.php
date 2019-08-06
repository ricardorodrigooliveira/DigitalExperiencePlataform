<?php include 'db.php';  ?>

<?php
  function mostraDados(){
    global $connect;
    $query = "SELECT * FROM usuario";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function atualizaTabela(){
    global $connect;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "UPDATE usuario SET username = '$username',
    password='$password'
    WHERE id = $id";
    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a inclusão";
    } else {
      echo '<div class="alert alert-success" role="alert">Dados atualizados com sucesso"</div>';
    }
  }


  function criaDados(){
        global $connect;
        $username = $_POST['username'];
        $password = $_POST['password'];

      //  echo $username . '<br>';
      //  echo $password;

        // QUERY, PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
        $query = "INSERT INTO usuario(username, password) VALUES ('$username', '$password')";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

        // VALIDAÇÃO
        if(!$resultado){
          echo "Não deu certo a inclusão";
        } else {
          echo "<script>alert('Dados criados com sucesso'); </script>";
        }

  }

  function leDados(){
    global $connect;
    $query = "SELECT * FROM usuario";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado))
    {
      print_r($row);
    }
  }

  function deletaDados(){
    global $connect;
    $id = $_POST['id'];
    $query = "DELETE from usuario WHERE id = $id";
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a exclusão";
    } else {
      echo "Dados apagados com sucesso";
    }

  }



 ?>
