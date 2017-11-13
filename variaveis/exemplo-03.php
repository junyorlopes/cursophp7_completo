<?php

//Variáveis - tipos básicos
//string
$nome = "Junyor";
$site = 'junyorlopes.github.io';
//int
$idade = 21;
//double
$salario = 1004.40;
//boolean
$bloqueado = false;

//Variáveis - tipos compostos
//array
$frutas = array("abacaxi", "laranja", "manga");
echo "Quantidade de frutas: " . count($frutas) . "<br>";
for($i = 0; $i < count($frutas); $i++){
	echo ($i + 1) . "°: " . $frutas[$i] . "<br>";
}
//objeto
$date = new DateTime('America/Sao_Paulo');
echo $date->format('d-m-Y H:i:s') . "<br>";

//Variáveis - tipos especiais
//resource
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

//null
$nulo = NULL; //não foi iniciado na memória, ausencia de valor
$vazio = "";  //foi iniciado na memória, mas não tem informação
?>

