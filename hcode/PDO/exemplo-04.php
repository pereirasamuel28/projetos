<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "super");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$id = 2;
$login = "João";
$password = "654321";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);



$stmt->execute();

echo "Dados alterados com sucesso!";



?>