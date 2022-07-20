<?php
require "configurar.php"; 

$id = filter_input(INPUT_POST,'id');
$crefito = filter_input(INPUT_POST,'crefito');
$senha = filter_input(INPUT_POST, 'senha');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $crefito && $senha && $nome && $email);{ 
    $banco= $usuario->prepare("UPDATE usuario SET crefito = :crefito, senha = :senha, nome = :nome, email = :email WHERE id = :id"); 
    $banco->bindValue(':crefito', $crefito);
    $banco->bindValue(':senha', $senha);
    $banco->bindValue(':nome', $nome);
    $banco->bindValue(':email', $email);
    $banco->bindValue(':id', $id);
    $banco->execute();

    header("Location: lista.php");
    exit;
}