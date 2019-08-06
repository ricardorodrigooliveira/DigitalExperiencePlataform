<?php
  if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];

    $query = "SELECT cat_id, cat_nome FROM categoria WHERE cat_id = $cat_id";
    $selectTodasCategorias = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectTodasCategorias)){
      $cat_id = $row['cat_id'];
      $cat_nome = $row['cat_nome'];

    }
  }

?>

<form action="" method="post">
  <div class="form-group">
    <label for="">Editar categoria</label>
    <input type="text" class="form-control" name="cat_nome" value="<?php if (isset($cat_nome)){echo $cat_nome;} ?>">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="atualizar" value="Atualizar">
  </div>
</form>

<?php
  if (isset($_POST['atualizar'])) {

    $editarCatNome = $_POST['cat_nome'];

    $query = "UPDATE categoria SET cat_nome = '$editarCatNome' where cat_id = $cat_id";
    mysqli_query($connection, $query);
  }
?>
