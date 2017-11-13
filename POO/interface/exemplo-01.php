<?php

interface Veiculos{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculos{
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

$civic = new Civic();
$civic->acelerar(200);
$civic->frenar(100);
$civic->trocarMarcha(5);
?>