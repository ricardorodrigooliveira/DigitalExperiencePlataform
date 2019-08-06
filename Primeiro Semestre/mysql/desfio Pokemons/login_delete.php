<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
  if(isset($_POST['delete'])){
    deletaPokemon();
  }
?>

<?php include "header.php"; ?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_delete.php" method="post">
      <select name="id">
        <?php
          mostraDados();
        ?>
      </select>

      <input class="btn btn-primary" type="submit" name="delete" value="DELETAR">
      <?php include 'buttons.php'; ?>
    </form>
<?php include "footer.php"; ?>
