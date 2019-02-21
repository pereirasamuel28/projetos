<?php 

Class Pessoa {

	public $nome;

	public function falar(){

		return "O meu nome é " . $this->nome;
	}
}

$samuel = new Pessoa();
$samuel->nome = "Samuel Pereira";

echo $samuel->falar();
?>