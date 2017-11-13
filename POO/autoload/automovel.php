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
?>