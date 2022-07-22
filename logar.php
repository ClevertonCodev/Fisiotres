<?php
session_start();
if(isset($_POST['crefito']) && !empty($_POST['crefito']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    require 'configurar.php';
    require 'entrar.php';

    $u = new cadastrados();
   

    $logi = addslashes($_POST['crefito']);
    $pswd = addslashes($_POST['senha']);

    if($u->login($logi, $pswd) === true){
        if(isset($_SESSION['nome'])){
            header("Location: sistemahome.php"); 
        } else {
            header("Location: pagina5.html ");
        }

    }else {
        header("Location: pagina5.html ");
    }

}else{
    header("Location: pagina5.html ");
}

?>

