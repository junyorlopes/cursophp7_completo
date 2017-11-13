<?php

interface Veiculos{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculos{
	public function acelerar($velocidade){
		echo "Acelerou: " . $velocidade . "Km/h<br>";
	}
	public function frenar($velocidade){
		echo "Frenou: " . $velocidade . "Km/h<br>";
	}
	public function trocarMarcha($marcha){
		echo "Marcha: " . $marcha;
	}
}

class Camaro extends Automovel{
	public function drift($velocidade){
		echo "Driftou: " . $velocidade . "Km/h<br>";
	}
	public function arCondicionado($temperatura){
		echo "Temperatura: " . $temperatura . " °C";
	}
}

$camaro = new Camaro();
$camaro->acelerar(200);
$camaro->drift(150);
$camaro->arCondicionado(0);
?>