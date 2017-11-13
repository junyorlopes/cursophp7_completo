<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Junyor', 
	'idade' => 21
));

array_push($pessoas, array(
	'nome' => 'Carlos', 
	'idade' => 22
));

print_r($pessoas[0]['nome']);

?>