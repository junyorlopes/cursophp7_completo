<?php

$nome = "junyor lopes";
echo "Maiusculo: " . strtoupper($nome);

unset($nome);
$nome = "JUNYOR LOPES";
echo "<br>Minusculo: " . strtolower($nome);

unset($nome);
$nome = "junyor lopes";
echo "<br>Primeira letra maiuscula: " . ucfirst($nome);

unset($nome);
$nome = "junyor lopes";
echo "<br>Primeiras letras maiusculas: " . ucwords($nome);

unset($nome);
$nome = "junyor lopes";
$nome = str_replace("o", "0", $nome);
$nome = str_replace("l", "1", $nome);
echo "<br>Após str_replace: " . $nome;
?>