<?php
require_once("config.php");

use Cliente\Cadastro;

$cadastro = new Cadastro();
$cadastro->setNome("Junyor Lopes");
$cadastro->setEmail("carloslopesjunyor@gmail.com");
$cadastro->setSenha("labirinto23");
$cadastro->registrarVenda();
?>