<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "super");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

echo "Dados excluidos com sucesso!";

//$conn->rollback();
$conn->commit();
?>