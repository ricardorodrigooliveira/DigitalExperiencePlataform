<?php include 'db.php';  ?>

<?php
  function mostraDados(){
    global $connect;
    $query = "SELECT * FROM pokemons";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function atualizaPokemon(){
    global $connect;
    $pokename = $_POST['pokename'];
    $tipo = $_POST['tipo'];
    $hp = $_POST['hp'];
    $id = $_POST['id'];
    // QUERY, PARA ATUALIZAR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
    $query = "UPDATE pokemons SET ";
    $query .= "name = '$pokename', ";
    $query .= "type = '$tipo', ";
    $query .= "hp = $hp ";
    $query .= "WHERE ID = $id";

    // FUNÇÃO QUE EXECUTA QUERIES
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a inclusão";
    } else {
      echo '<div class="alert alert-success" role="alert">Pokémon atualizado com sucesso"</div>';
    }
  }


  function inserePokemon(){
        global $connect;
        $pokename = $_POST['pokename'];
        $tipo = $_POST['tipo'];
        $hp = $_POST['hp'];
      //  echo $username . '<br>';
      //  echo $password;

        // QUERY, PARA INSERIR OS DADOS DE ACORDO COM OS NOMES DAS MINHAS VARIÁVEIS:
        $query = "INSERT INTO pokemons(name, type, hp) VALUES ('$pokename', '$tipo', $hp)";

        // FUNÇÃO QUE EXECUTA QUERIES
        $resultado = mysqli_query($connect, $query);

        // VALIDAÇÃO
        if(!$resultado){
          echo "Não deu certo a inclusão";
        } else {
          echo "<script>alert('Adiconado na Pokedex com sucesso'); </script>";
        }

  }

  function lePokemonFogo(){
    global $connect;
    $query = "SELECT * FROM pokemons WHERE type = 'fogo'";
    $resultado = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($resultado))
    {
      print_r($row);
    }
  }

  function deletaPokemon(){
    global $connect;
    $id = $_POST['id'];
    $query = "DELETE from pokemons WHERE id = $id";
    $resultado = mysqli_query($connect, $query);
    // VALIDAÇÃO
    if(!$resultado){
      echo "Não deu certo a exclusão";
    } else {
      echo '<div class="alert alert-warning" role="alert">Pokémon excluido com sucesso</div>';
    }

  }



 ?>
