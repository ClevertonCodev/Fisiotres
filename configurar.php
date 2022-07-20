<?php
$db_name = 'fisiotres';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = '';


$usuario = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password);

$bd = $usuario->query ('SELECT * FROM usuario ');

#$dados = $bd->fetchAll();
#echo '<pre>';
#print_r($dados);