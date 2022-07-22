<?php 
require 'configurar.php';

$crefito = filter_input(INPUT_POST,'crefito');
$senha = filter_input(INPUT_POST, 'senha', );
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if($crefito && $senha && $nome && $email) {
      $banco = $usuario->prepare("SELECT * FROM usuario WHERE crefito =:crefito");
      $banco->bindValue(':crefito', $crefito);
      $banco->execute();

      if ($banco->rowCount()=== 0) {

          $banco = $usuario->prepare("INSERT INTO usuario (crefito, senha, nome, email) VALUES (:crefito, :senha, :nome, :email)");
          $banco->bindValue(':crefito', $crefito);
          $banco->bindValue(':senha', $senha);
          $banco->bindValue(':nome', $nome);
          $banco->bindValue(':email', $email);
          $banco->execute();
          header("Location: pagina5.html");
          exit;
          
      }else{
        header("Location: pagina5.html");
      }
  }else{
    header("Location: pagina5.html");
  }

