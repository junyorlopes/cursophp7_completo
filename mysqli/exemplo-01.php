<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");//IP do servidor, usuario, senha, nome do banco

if($conn->connect_error){
	echo "Erro: " . $conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "root";
$senha = "labirinto23";

$stmt->execute();

?>