<?php 
require 'configurar.php';

#if (empty($_POST['usua']) || empty($_POST['senha'])){
 #   header('Location: sistemahome.html');
  #  exit();
#}
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['entrar'])) {
    //var_dump($dados);
    $banco = $usuario->prepare("SELECT * FROM usuario  WHERE crefito =:crefito, senha = :senha");
    $banco->bindParam(':crefito', $dados['crefito']);
    $banco->bindParam(':senha', $dados['senha']);
    $banco->execute();

   
        #if(password_verify($dados['senha'], $row_usuario['senha'])){
}

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
