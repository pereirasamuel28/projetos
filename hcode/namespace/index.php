<?php 

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Samuel Pereira");
$cad->setEmail("samuel.abraham.rr@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>