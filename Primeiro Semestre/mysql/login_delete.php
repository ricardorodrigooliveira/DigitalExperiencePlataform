<?php
  include "db.php";
  include "functions.php";
  include "header.php";
?>

<?php
  if(isset($_POST['delete'])){
    deletaDados();
  }
?>
    <div class="container">
      <div class="col-sm-6">
        <form action="login_delete.php" method="post">

          <select name="id">
            <?php
              mostraDados();
            ?>
          </select>

          <input class="btn btn-primary" type="submit" name="delete" value="Excluir">

          <?php include "buttons.php" ?>
        </form>
<?php include "footer.php" ?>
