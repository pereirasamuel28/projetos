<?php

namespace Cliente;

class Cadastro extends \Cadastro{

	public function registrarVenda()
	{
		echo "Uma venda foi foi registrada para o cliente " . $this->getNome();
	}
}
?>