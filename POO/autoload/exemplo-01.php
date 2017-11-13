<?php

function __autoload($nomeClasse){
	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}


$camaro = new Camaro();
$camaro->acelerar(80);

?>