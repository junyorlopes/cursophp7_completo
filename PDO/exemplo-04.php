<?php

require_once("conn.php");
#AlTERANDO NO BANCO DE DADOS
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

?>