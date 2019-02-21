<?php 

require_once ("config.php");

/*
//MODO MANUAL
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

//MODO AUTO - OBJETOS

$root = new Usuario();

$root->loadbyId(2);

echo $root; 



?>