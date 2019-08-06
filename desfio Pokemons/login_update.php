<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
  if(isset($_POST['update'])){
    atualizaPokemon();
  }
?>
<?php include "header.php"; ?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_update.php" method="post">

      <div class="form-group">
        <label>Nome do Pokémon</label>
        <input type="text" name="pokename" class="form-control">
      </div>
      <div class="form-group">
        <label>Tipo</label>
        <input type="text" name="tipo" class="form-control">
      </div>

      <div class="form-group">
        <label>HP</label>
        <input type="range" min='0' max='100' value='0' onchange="showValue(this.value)" name="hp" step='1'/>
        <span id='range'>0</span>
        <script type="text/javascript">
            function showValue(newValue){
              document.getElementById('range').innerHTML=newValue;
            }
        </script>
      </div>

      <select name="id">
        <?php
          mostraDados();
        ?>
      </select>
      <input class="btn btn-primary" type="submit" name="update" value="ATUALIZAR">

      <?php include 'buttons.php'; ?>

    </form>
<?php include "footer.php"; ?>
