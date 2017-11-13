<?php

function arguments() {
	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(arguments("Teste1","Teste2"));

?>