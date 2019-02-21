<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Samuel',
	'idade'=> '29'
));

array_push($pessoas, array(
	'nome' => 'Naira',
	'idade'=> '30'
));


echo json_encode($pessoas);

?>