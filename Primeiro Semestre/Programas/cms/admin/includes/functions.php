<?php
  //funções de inserir categoria
  function inserirCategoria(){
    global $connection;
    if(isset($_POST['enviar'])){
        $cat_nome = $_POST['cat_nome'];
        if($cat_nome == ""){
          echo "O campo não pode ser nulo";
        }else{
          $query = "INSERT INTO categoria(cat_nome) VALUE ('$cat_nome')";
          $resultado = mysqli_query($connection, $query);
          if(!$resultado){
            echo "Erro ao inserir categoria!";
          }else{
            echo "Categoria adicionada com sucesso";
          }
        }
      }
    }


  //funções de mostrar categoria
  function mostrarCategoria(){
    global $connection;
    $query = "SELECT * FROM categoria";
    $select_todas_categorias = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_todas_categorias)){
      $cat_id = $row['cat_id'];
      $cat_nome = $row['cat_nome'];
      echo '<tr>';
      echo '<td>' . $cat_id . '</td>';
      echo '<td>' . $cat_nome . '</td>';
      echo '<td><a class="fas fa-trash" href="categorias.php?delete='.$cat_id.'"></a></td>';
      echo '<td><a class="fas fa-edit" href="categorias.php?edit='.$cat_id.'"></a></td>';
      echo '</tr>';
    }
  }

  // funcao de apagar categoria
  function apagarCategoria(){
    global $connection;
    if (isset($_GET['delete'])) {
      $apaga_cat_id = $_GET['delete'];
      $query = "DELETE FROM categoria where cat_id = $apaga_cat_id";
      $apagandoId = mysqli_query($connection, $query);
      header("Location: categorias.php");
    }
  }

  function exibirPosts(){
    global $connection;
    $query = "SELECT * FROM posts";
    $select_todos_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_todos_posts)) {
      $post_nome = $row['post_nome'];
      $post_autor = $row['post_autor'];
      $post_data = $row['post_data'];
      $post_imagem = $row['post_imagem'];
      $post_conteudo = $row['post_conteudo'];

      $post_data = date('d-m-Y', strtotime($post_data));
    

      echo "<h2>";
      echo "<a href='#'>".$post_nome."</a>";
      echo "</h2>";
      echo "<p class='lead'> by <a href='index.php'>".$post_autor."</a>";
      echo "</p>";
      echo "<p><span class='glyphicon glyphicon-time'></span> Postado em " .$post_data."</p>";
      echo "<hr>";
      echo "<img class='col-sm-2' src=../images/$post_imagem'>";
      echo "<hr>";
      echo "<p>".$post_conteudo."</p>";
      //echo "<a class='btn btn-primary' href='#'>Leia Mais<span class='glyphicon glyphicon-chevron-right'></span></a>";
      echo "<hr>";
    }
  }
?>
