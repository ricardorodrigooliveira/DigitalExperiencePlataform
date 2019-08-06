<?php
  include "header.php";
  include "db.php";
  include "functions.php";
  if (isset($_POST['salvar'])) {
    novoCliente();
  }
?>

  <div class="container">
    <?php include "toolbar.php";?>
    <form action="formCadastroCliente.php" method="post">
      <h2><small class="text-muted" heigth="center">Cadastro de Clientes</small></h2>
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <label for="inputnome">Nome</label>
              <input type="text" class="form-control" id="inputnome" name="nome" value="Primeiro Nome">
            </div>
            <div class="col">
              <label for="">Sobrenome</label>
              <input type="text" class="form-control" name="sbrnome" value="Ultimo nome">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Rua xxxxxxx, 11111">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Complemento</label>
          <input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Apartamento, hotel, casa, etc.">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity" name="cidade">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEstado">Estado</label>
            <select id="inputEstado" class="form-control" name="estado">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP" name="cep">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
    </form>
  </div>
<?php include "footer.php";?>
