<?php

$nome = "Junyor";

function exibirNome(){
	global $nome;
	echo "Seu nome era <b>" . $nome;
}

function exibirNome2($nome){
	echo "</b>, agora seu nome é <b>" . $nome . "</b>.";
}

exibirNome();
exibirNome2("José");
?>