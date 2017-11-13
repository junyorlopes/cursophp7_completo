<?php
//recuperando a sessão de um usuário aleatório (HACKER)
session_id('pml4nlpjsgbri1adv6bkmot2pk');

require_once("config.php");
//gera um ID diferente para cada atualização da página
//session_regenerate_id();

echo session_id();

?>