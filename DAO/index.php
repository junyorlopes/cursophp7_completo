<?php
//Inclusão do arquivo que faz a verificação de classes existentes.
require_once("config.php");

//SELECT BY ID
/*$usuario = new Usuario();
$usuario->loadById(5);
echo "<b>Consultar usuário por ID:</b><br>" . $usuario;

//LIST
$listar = new Usuario();
$lista = Usuario::getList();
echo "<br><b>Lista de usuários:</b><br>" . json_encode($lista);
*//*
$busca = Usuario::search("ju");
echo "<br><b>Busca de usuário:</b><br>" . json_encode($busca);

$listar->login("metsa", "bayuin");
echo "<br><b>Autenticado:</b><br>" . $listar;

//INSERT
$inserir = new Usuario("paulissta", "asv215");
$inserir->insert();
echo "<br><b>Novo usuário:</b><br>" . $inserir;*/

//UPDATE
/*$alterar = new Usuario();
$alterar->loadById(8);
$alterar->update("zero", "122");
echo $alterar;*/

//DELETE
$delete = new Usuario();
$delete->loadById(8);
$delete->delete();
echo $delete;
?>