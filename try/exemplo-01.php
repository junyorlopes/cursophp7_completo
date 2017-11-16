<?php
try { //Execução desejada
	throw new Exception("Houve um erro!", 40);
}
//Caso a execução de um erro
 catch (Exception $e) { 
 	echo json_encode(array(
 		"message"=>$e->getMessage(),
 		"line"=>$e->getLine(),
 		"file"=>$e->getFile(),
 		"code"=>$e->getCode()
 	));
}
?>