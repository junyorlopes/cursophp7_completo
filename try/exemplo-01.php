<?php
try { //Tente executar isto
	throw new Exception("Houve um erro!", 40);
}
//Caso o bloco acima falhe, execute isto
 catch (Exception $e) { 
 	echo json_encode(array(
 		"message"=>$e->getMessage(),
 		"line"=>$e->getLine(),
 		"file"=>$e->getFile(),
 		"code"=>$e->getCode()
 	));
}
?>
