<<?php 
//Tipos de dados

//Basicos

$texto = 'Samuel'; // String
$site = 'www.google.com.br'; //String aspas simples
$ano = 1990; //Inteiro
$salario = 5500.99; // Ponto Flutuante, double
$bloqueado = false; // Booleano

echo  $texto . " </br> " . $site . "</br>" . $ano . "</br>" . $salario . "</br>" . $bloqueado;

//Compostas

$frutas = array("abacaxi" , "laranja" , "manga" ); //Arrays

echo $frutas[2];


//var_dump($frutas);


$nascimento = new DateTime(); //Objeto

//echo $nascimento;

//var_dump($nascimento);

// Especiais
echo "</br>";

$arquivo = fopen("exemplo-02.php", "r"); //resource, arquivos

var_dump($arquivo);

$nulo = NULL;
//<>
$vazio = " ";

 ?>