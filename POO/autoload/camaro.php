<?php
class Camaro extends Automovel{
	public function drift($velocidade){
		echo "Driftou: " . $velocidade . "Km/h<br>";
	}
	public function arCondicionado($temperatura){
		echo "Temperatura: " . $temperatura . " °C";
	}
}
?>