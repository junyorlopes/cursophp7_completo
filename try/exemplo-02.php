<?php
function trataNome($nome){
	if(!$nome){
		throw new Exception("Nenhum nome foi informado.", 1);
	}
	else {
		echo "Nome: $nome <br>";
	}
}
try {
	trataNome("Junyor");
	trataNome("");
} catch (Exception $e) {
	echo "<br><b>ERRO</b>";
	echo "<br>Mensagem: " . $e->getMessage();
	echo "<br>Arquivo: " . $e->getFile();
	echo "<br>Linha: " . $e->getLine();
	echo "<br>Código: " . $e->getCode();
} finally {
	echo "<br>Executou o TRY.";
}
?>