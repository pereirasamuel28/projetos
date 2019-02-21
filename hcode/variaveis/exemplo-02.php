<?php 

//Seguindo as boas práticas, inicia-se a variavel com a inicial minuscula e as seguintes maiusculas

$anoNascimento = 1990;

//Nao se inicia variaveis com numeros, mas pode conter no corpo
//underline é um caractere especial aceito, cuidado com as palavras reservadas

$nome1 = "Samuel";
$sobrenome = "Pereira";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit();
//unset limpa a variavel
unset($nome1);

//isset() checa se a variavel está populada
if (isset($nome1)) {
	echo $nome1;
}


?>