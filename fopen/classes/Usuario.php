<?php
class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function __construct($login = "", $password = ""){
		$this->setDesLogin($login);
		$this->setDesSenha($password);
	}

	public function getIdUsuario(){
		return $this->idusuario;
	}
	public function setIdUsuario($value){
		$this->idusuario = $value;
	}
	public function getDesLogin(){
		return $this->deslogin;
	}
	public function setDesLogin($value){
		$this->deslogin = $value;
	}
	public function getDesSenha(){
		return $this->dessenha;
	}
	public function setDesSenha($value){
		$this->dessenha = $value;
	}
	public function getDtCadastro(){
		return $this->dtcadastro;
	}
	public function setDtCadastro($value){
		$this->dtcadastro = $value;	
	}
	//Dados
	public function setData($data){
		$this->setIdUsuario($data['idusuario']);
		$this->setDesLogin($data['deslogin']);
		$this->setDesSenha($data['dessenha']);
		$this->setDtCadastro(new DateTime($data['dtcadastro']));
	}
	//Inserir usuário
	public function insert(){
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			":LOGIN"=>$this->getDesLogin(),
			":PASSWORD"=>$this->getDesSenha()
		));
		if(count($results) > 0){
			$this->setData($results[0]);
		}

	}
	public function update($login, $password){
		$this->setDesLogin($login);
		$this->setDesSenha($password);
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_update(:ID, :LOGIN, :PASSWORD)", array(
			':ID'=>$this->getIdUsuario(),
			':LOGIN'=>$this->getDesLogin(),
			':PASSWORD'=>$this->getDesSenha()
		));
	}
	public function delete(){
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_delete(:ID)",array(
			':ID'=>$this->getIdUsuario()
		));
	}
	//Busca todos usuarios
	public static function getList(){
		$sql = new Sql();
		return $sql->select("CALL sp_usuarios_select");
	}
	//Busca pelo login do usuário
	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%" . $login . "%"));
	}
	//Validade de login
	public function login($login, $senha){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :SEARCH AND dessenha = :PASS", array(
			':SEARCH'=>$login, 
			':PASS'=>$senha
		));
		if(count($results) > 0){
			$this->setData($results[0]);
		}
		else{
			throw new Exception("Login ou senha inválidos.");
		}
	}
	//Busca por ID
	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id)
		);
		if(count($results) > 0){
			$this->setData($results[0]);
		}
	}
	//Impressão JSON_ENCODE
	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDesLogin(),
			"dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}
} 
?>