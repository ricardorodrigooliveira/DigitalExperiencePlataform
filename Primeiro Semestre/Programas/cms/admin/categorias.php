<?php ob_start()?><!--Para que o header("Location: categorias.php") funcione -->
 <?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>
 <?php include "includes/functions.php"; ?>
    <div id="wrapper">
        <!-- Navigation -->
 <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Seja bem vindo
                            <small>Ricardo Oliveira</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Categorias
                            </li>
                        </ol>

                        <div class="col-sm-6">
                          <?php
                            inserirCategoria();
                          ?>
                          <form action="categorias.php" method="post">
                            <div class="form-group">
                              <label for="">Adicionar categoria</label>
                              <input type="text" class="form-control" name="cat_nome" value="">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" name="enviar" value="Adicionar">
                            </div>
                          </form>
                          <hr>
                          <?php
                            if(isset($_GET['edit'])){
                              include "includes/editarCategoria.php";
                            }
                          ?>
                        </div>

                        <div class="col-sm-6">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nome da Categoria</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <?php
                                  //mostrar Categorias
                                  mostrarCategoria();

                                  apagarCategoria();
                                ?>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
