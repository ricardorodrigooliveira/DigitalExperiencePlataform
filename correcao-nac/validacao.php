<?php
      if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $conta = $_POST['conta'];
        $erro = 0;

        if(strlen($nome) < 3 || strlen($nome) > 32){
          echo "O nome deve conter no mínimo 3 e no máximo 32 caracteres <br>";
          $erro = 1;
        }
        if(!strstr($email, '@')){
          echo "E-mail inválido. <br>";
          $erro = 1;
        }
        if(strlen($telefone) < 10 || strlen($telefone) > 11){
          echo "O telefone deve conter entre 10 e 11 caracteres <br>";
          $erro = 1;
        }
        if($conta != 15){
          echo "O resultado da soma está incorreto!";
          $erro = 1;
        }
        if($erro == 0){
        echo "Parabéns, preenchimento correto!";
        }

      }
     ?>
