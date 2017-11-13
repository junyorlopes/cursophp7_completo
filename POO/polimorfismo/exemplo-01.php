<?php

abstract class Animal {
	public function falar(){
		return "Som";
	}
	public function mover(){
		return "Andar";
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "Latir<br>";
	}
	public function mover(){
		return "Correr<br>";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Miar<br>";
	}
	public function mover(){
		return "Caminhar " . parent::mover() . "<br>";
	}
}

$cachorro = new Cachorro();
echo "Cachorro<br>";
echo $cachorro->falar();
echo $cachorro->mover();

$gato = new Gato();
echo "<br>Gato<br>";
echo $gato->falar();
echo $gato->mover();

?>