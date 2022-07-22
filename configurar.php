<?php

session_start();

$db_name = 'fisiotres';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = 'Cs886250';

global $usuario;

try{
    $usuario = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password);
    $usuario -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo "Erro:".$e->getMessage();
    exit;
}


#$bd = $usuario->query ('SELECT * FROM usuario ');

#$dados = $bd->fetchAll();
#echo '<pre>';
#print_r($dados);