<?php 
require 'configurar.php'; 

$id = filter_input(INPUT_GET,'id'); 

if($id){
    $banco = $usuario->prepare("DELETE FROM usuario WHERE id = :id");
    $banco->bindValue(':id', $id);
    $banco->execute();
}
header("Location: lista.php");