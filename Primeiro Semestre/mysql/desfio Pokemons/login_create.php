<?php
  include "db.php";
  include "functions.php";
  if(isset($_POST['enviar'])){
    inserePokemon();
}
?>
<?php include "header.php"; ?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_create.php" method="post">

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

      <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">

      <?php include 'buttons.php'; ?>


    </form>
<?php include 'footer.php';?>
