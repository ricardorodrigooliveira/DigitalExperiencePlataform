<?php
  include "funcoes.php";
  if(isset($_GET['CalcMedia'])){
    $media = calculaMedia();
}?>

<?php include "header.php"; ?>
    <div class="container">
      <h1>Calculo de média</h1>
      <form action="desafio_10.php" method="get">
        <div class="form-group">
          <label for="">Nome</label><br>
          <input type="text" name="nome" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Disciplina</label><br>
          <select name="disciplinas">
            <option value=""></option>
            <option value="Empreendedorismo" name="1">Empreendedorismo 2.0</option>
            <option value="Inovacao Disrruptiva" name="2">Inovação Disrruptiva</option>
            <option value="Digital Exp. Plataform" name="3">DEP</option>
          </select>
          <!--<input type="text" name="disciplina" class="form-control">-->
        </div>

        <div class="form-group">
          <label for="">NAC</label><br>
          <input type="text" name="nac" class="form-control">
        </div>

        <div class="form-group">
          <label for="">PS</label><br>
          <input type="text" name="ps" class="form-control">
        </div>

        <div class="form-group">
          <label for="">AM</label><br>
          <input type="text" name="am" class="form-control">
        </div>

        <input class="btn btn-primary" type="submit" name="CalcMedia" value="Calcular Média">

        <br>

        <?php
          if(isset ($media)){
            echo '<div class= "alert-success" role="alert">' . $media . '</div>';
          }
        ?>
      </form>
    </div>
<<?php include 'footer.php';?>
