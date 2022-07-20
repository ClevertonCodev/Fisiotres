<?php
require "configurar.php"; 
$user = [];
$id = filter_input(INPUT_GET,'id');

if ($id){
    $banco = $usuario->prepare("SELECT * FROM usuario  WHERE id = :id");
    $banco->bindValue(':id', $id);
    $banco->execute();

    if($banco->rowCount() >0){
        $user = $banco->fetch(PDO::FETCH_ASSOC);
    }else {
        header("Location: lista.php");
    }
}else {
    header("Location: lista.php");
}
?>

<h1>Editar Usuario</h1>
<form action="ativo.php" method="post">
Id<input type="text" name="id" value="<?=$user['id'];?>">
    <label for="">crefito<input type="text" name="crefito" value="<?=$user['crefito'];?>"></label>
    <label for="">Senha<input type="text" name="senha" value="<?=$user['senha'];?>"></label>
    <label for="">nome <input type="text" name="nome" value="<?=$user['nome'];?>"></label>
    <label for="">email<input type="text" name="email" value="<?=$user['email'];?>"></label>
    <input type="submit" value="atualizar">
</form>