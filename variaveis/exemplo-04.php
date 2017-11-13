<?php 
//Atribuindo dados a variaies globais pela URL = ?a=junyor&b=21
$nome = (string)$_GET["a"];
$idade = (int)$_GET["b"];
echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "<br>";

//Obtendo o IP do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP: " . $ip . "<br>";

//Obtendo as páginas de acesso do usuário
$diretorio_pagina = $_SERVER["SCRIPT_NAME"];
echo "Diretório da página: " . $diretorio_pagina . "<br>";

?>