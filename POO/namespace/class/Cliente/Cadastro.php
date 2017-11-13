<?php
namespace Cliente;
class Cadastro extends \Cadastro {
	public function registrarVenda(){
		echo "Venda registrada com sucesso ao cliente " . $this->getNome() . "."; 
	}
}
?>