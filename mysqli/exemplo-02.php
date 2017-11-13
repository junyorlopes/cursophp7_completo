<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");//IP do servidor, usuario, senha, nome do banco

if($conn->connect_error){
	echo "Erro: " . $conn->connect_error;
	exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

?>