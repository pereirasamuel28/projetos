<?php 

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once "$nomeClasse.php";
}

$carro = new Civic();
$carro->acelerar(80);

?>