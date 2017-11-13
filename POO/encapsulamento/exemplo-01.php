<?php

class Pessoa{
	public $nome = "Junyor Lopes";
	protected $idade = 21;
	private $senha = "20conto";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}  
}

$pessoa = new Pessoa();
//echo $pessoa->nome . "<br";
$pessoa->verDados();
?>