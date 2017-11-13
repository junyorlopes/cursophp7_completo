<?php

class Carro {
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
			);
	}
}

$camaro = new Carro();
$camaro->setModelo("Camaro");
$camaro->setMotor("2.0");
$camaro->setAno("2017");

var_dump($camaro->exibir());
//echo $camaro->getModelo();

?>