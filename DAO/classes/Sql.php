<?php
Class Sql extends PDO {
	private $conn;
	//Método construtor referente a conexão com o banco.
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}
	//Associar apenas um parametro da query.
	private function setParam($statemant, $key, $value){
		$statemant->bindParam($key, $value);
	}
	//Associar parametros da query
	private function setParams($statemant, $parameters = array()){
		foreach ($parameters as $key => $value) {
			//Parametros da query.
			$this->setParam($statemant, $key, $value);
		}
	}
	//Execução de comandos para obter resultado do BD.
	public function query($rawQuery, $params = array()){
		//Comandos INSERT, SELECT, UPDATE e DELETE. 
		$stmt = $this->conn->prepare($rawQuery);
		//Invocando método que realiza o SET de cada parametro.
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt; 
	}
	//Seleciona a query a ser executada.
	public function select($rawQuery, $params = array()):array{
		//Optem a query do SELET mais os parametros.
		$stmt = $this->query($rawQuery, $params);
		//Retorno dos dados da tabela.
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function exibir($dados){
		foreach ($dados as $row) {
			foreach ($row as $key => $value) {
				echo "<strong>" . $key . ": </strong>" . $value . "<br>";
			}
			echo "<br>";
		}
	}
}
?>