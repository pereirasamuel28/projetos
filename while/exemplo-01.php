<?php

$condicao = true;

while ($condicao) {

	$numero = rand(1, 60);

	if ($numero === 9) {
		echo "Ganhou!!!";
		$condicao = false;
		break;
	}

	echo $numero . " ";
}

?>