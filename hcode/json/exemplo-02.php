<?php 

$json = '[{"nome":"Samuel","idade":"29"},{"nome":"Naira","idade":"30"}]';

$data = json_decode($json, true);

var_dump($data);



?>