<?php 

function soma(int ... $valores){

	return array_sum($valores);
};

echo var_dump(soma(20, 30));
echo "<br>";

echo soma(2.6, 3.0);
echo "<br>";

echo soma(2, 30);
echo "<br>";
?>