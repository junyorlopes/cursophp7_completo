<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Junyor', 
	'idade' => 21
));

array_push($pessoas, array(
	'nome' => 'José', 
	'idade' => 22
));
//convertendo dados do array para JSON
echo json_encode($pessoas);

?>