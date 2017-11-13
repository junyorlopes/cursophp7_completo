<?php
require_once("conn.php");
#SELECIONANDO NO BANCO DE DADOS
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "<br>";
	}
	echo "<br>";
}

?>