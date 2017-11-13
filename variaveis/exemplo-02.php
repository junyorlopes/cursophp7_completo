<?php

$anoNascimento = 1996;

echo $anoNascimento, "<br>";

//Limpando conteúdo da variável
unset($anoNascimento);

//Verificando a existencia de dados da variável
if(isset($anoNascimento)){
	echo $anoNascimento, "<br>";
}
else{
	echo "<b>Não há existencia de dados na variável!</b><br>";
}

//Concatenação
$nome = "Junyor";
$sobrenome = "Lopes";
$nomeCompleto = $nome." ".$sobrenome;
echo "Nome: ", $nome, "<br>";
echo "Sobrenome: ", $sobrenome, "<br>";
echo "Nome Completo: ", $nomeCompleto, "<br>"; 

?>