<?php

function verificarCategoria ($idade){
	$idadeBebe = 0;
	$idadeCrianca = 1;
	$idadeAdolescente = 12;
	$idadeAdulto = 18;
	$idadeIdoso = 65;

	if (($idade >= 0) && (is_numeric($idade))){
		if ($idade < $idadeCrianca) {
			echo "Bebê.";
		}
		else if ($idade < $idadeAdolescente) {
			echo "Criança.";
		}
		else if ($idade < $idadeAdulto) {
			echo "Adolescente.";
		}
		else if ($idade < $idadeIdoso) {
			echo "Adulto.";
		}
		else if ($idade >= $idadeIdoso) {
			echo "Idoso.";
		}
	}
	else {
		echo "<p><b>Erro ao informar a idade!</b></p>";
	}
}

function verificarCategoria2 ($idade){
	$idadeAdulto = 18;
	echo ($idade < $idadeAdulto) ? "<br>Menor de idade.":"Maior de idade.";
}

?>