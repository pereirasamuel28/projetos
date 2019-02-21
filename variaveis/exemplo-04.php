<?php 

//Variaveis Globais - PRE DEFINIDAS - ARRAYS SUPERGLOBAIS

//Pega o valor da URL e o Tipo
$valor = (int) $_GET["var"];

//var_dump($valor)

//VARIAVEIS GLOBAIS DO PHP - PEGANDO O IP COM SERVER
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

echo "</br>";

//USANDO A SCRIPT_NAME PRA VER EM QUE ARQUIVO ESTA NO MOMENTO
$log = $_SERVER["SCRIPT_NAME"];

echo $log;

?>