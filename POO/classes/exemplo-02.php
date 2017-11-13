<?php

class Calculadora {
	//public $operador;
	public $numero1;
	public $numero2;
	public function somar(){
		return $this->numero1 + $this->numero2;
	}
	public function subtrair(){
		return $this->numero1 - $this->numero2;
	}
}

$calculadora = new Calculadora();
$calculadora->numero1 = 10;
$calculadora->numero2 = 1;
echo "Adição: " . $calculadora->somar();
echo "<br>Subtração: " . $calculadora->subtrair();

?>