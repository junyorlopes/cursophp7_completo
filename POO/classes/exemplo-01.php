<?php

class Pessoa {
	//atributo
	public $nome;
	//método
	public function falar(){

		return "O meu nome é " . $this->nome . ".";

	}
}

$pessoa = new Pessoa();

$pessoa->nome = "José da Silva";

echo $pessoa->falar();

?>