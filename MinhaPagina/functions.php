<?php include "db.php"; ?>

<?php
function novoCliente(){
    global $connect;
    $nome = $_POST['nome'];
    $sobreNome = $_POST['sbrnome'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    $dml = "INSERT INTO t_cliente (nm_cliente, ds_endereco,  ds_complemento, ds_cidade, ds_estado, cd_cep) values ( '$nome', '$endereco', '$complemento', '$cidade', '$estado', $cep)";

    $result = mysqli_query($connect, $dml);

    if (!$result) {
      echo "Erro ao incluir cliente";
    }else{
      echo "<script>alert('Cliente cadastrado com sucesso!'); </script>";
    }
}





?>
