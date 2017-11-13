<?php

require_once("conn.php");
#AlTERANDO NO BANCO DE DADOS
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$conn->beginTransaction();
$id = 1;

$stmt->execute(array($id));
$conn->rollBack();
?>