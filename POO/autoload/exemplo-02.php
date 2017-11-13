<?php

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse . ".php")){
		require_once($nomeClasse . ".php");
	}
}
//registra mais de uma função como autoload
spl_autoload_register("incluirClasses");

spl_autoload_register(
	function($nomeClasse){
		if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")){
			require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
		}
	}
);

$camaro = new Camaro();
$camaro->acelerar(80);

?>