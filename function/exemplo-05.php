<?php 

$a = 10;

//PASSANDO UM PARAMETRO NORMAL, AFETA O VALOR DENTRO DO ESCOPO, UTILIZANDO A FUNCAO, PARA AFETAR A VARIAVEL PASSADA COMO REFENRCIA, NECESSITAMOS DE & PARA TAL

function ola(&$b){ 

	$b = 50;
	return $b;
}

echo ola($a);

echo "<br>";

echo $a;

?>