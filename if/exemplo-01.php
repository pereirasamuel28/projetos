<?php 
$qualSuaIdade = 90;

$crianca = 12;
$menorIdade = 18;
$melhorIdade = 65;

if ($qualSuaIdade < $crianca) {
	echo "Criança!";
}else if($qualSuaIdade < $menorIdade){
	echo "Adolescente!";
}else if($qualSuaIdade < $melhorIdade){
	echo "Adulto!";
}else{
	echo "Idoso!";
}

echo "<br>";

echo ($qualSuaIdade < $melhorIdade)? "Adulto":"Idoso";
?>