<?php 
//ESCOPO DE VARIAVEIS

$nome = "Samuel Pereira";

//VARIAVEL LOCAL
function teste1(){
	echo $nome . "AQUI NÃO VEIO NADA";
}

//VARIAVEL GLOBAL
function teste2(){
	global $nome;
	echo $nome . "AQUI VEIO A GLOBAL";
}

teste1();

echo "</br>";

teste2();


?>
