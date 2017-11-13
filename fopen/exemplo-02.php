<?php
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * from tb_usuarios ORDER BY deslogin");
$headers = array();
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");
//Linhas do BD
foreach ($usuarios as $rows) {
	$data = array();
	//Campos do BD
	foreach ($rows as $key => $value) {
		array_push($data, $value);
	}
	fwrite($file, implode(",", $data) . "\r\n");
}
fclose($file);
?>