<?php 

function ola($texto = "Mundo", $periodo = "Bom dia!"){

	return "Olá $texto! $periodo <br>";
}

echo ola();
echo ola("","Bom dia!");
echo ola("Joao","Boa noite!");

?>