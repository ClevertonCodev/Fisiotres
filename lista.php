<?php 
require 'configurar.php'; 

$lista = []; 
$banco = $usuario->query("SELECT * FROM usuario");
if($banco->rowCount() > 0){
    $lista = $banco->fetchAll(PDO::FETCH_ASSOC);
} 
?>

<h1> Lista de Usuários</h1>

<table border="1">
        <tr>
            <th>ID</th>
            <th>Crefito</th>
            <th>Senha</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($lista as $user): ?>
            <tr>
                <td><?=$user['id'];?></td>
                <td><?=$user['crefito'];?></td>
                <td><?=$user['senha'];?></td>
                <td><?=$user['nome'];?></td>
                <td><?=$user['email'];?></td>
                <td>
                    <a href="editar.php?id=<?=$user['id'];?>">[Editar]</a>
                    <a href="excluir.php?id=<?=$user['id'];?>">[Excluir]</a>
                </td>
                
            </tr>
        <?php endforeach; ?>   
</table>
   <a href="pagina5.html"></a>

