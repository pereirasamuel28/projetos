<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade)
	{
		echo "O veículo acelerou até " . $velocidade . " km/h";
	}
	public function frenar($velocidade)
	{
		echo "O veículo frenou até " . $velocidade . " km/h";
	}
	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a " . $marcha . " marcha";
	}
}

class Civic extends Automovel{
	
}

$carro = new Civic();

$carro->acelerar(40);
echo "<br/>";
$carro->frenar(20);
echo "<br/>";
$carro->trocarMarcha(2);
?>