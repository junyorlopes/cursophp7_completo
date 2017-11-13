<?php 

$frase = "A repetição é mãe da retenção.";
//condição da busca
$condicao = "mãe";
//quantidade de caracteres que tem na condição
$qtd_condicao = strlen($condicao);
//conta as posições de caracteres até chegar na condição
$q = strpos($frase, $condicao);
//obtem a frase da posição 0 até a posição da condição
$texto =  substr($frase, 0, $q);
var_dump($texto);
//obtento o texto da condição até o final da frase
$texto2 = substr($frase, $q + strlen($condicao), strlen($frase));
var_dump($texto2);
?>