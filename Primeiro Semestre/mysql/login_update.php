<?php
  include "db.php";
  include "functions.php";
  include "header.php";
 ?>
<?php
  if(isset($_POST['update'])){
    atualizaTabela();
  }
?>
    <div class="container">
      <div class="col-sm-6">
        <form action="login_update.php" method="post">

          <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control">
          </div>

          <select name="id">
            <?php
              mostraDados();
            ?>
          </select>

          <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">
          <?php include "buttons.php" ?>
        </form>
<?php include "footer.php" ?>
