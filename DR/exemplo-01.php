<?php
$name = "img";
if(is_dir($name)){
	//exclui um diretório
	rmdir($name);
	echo "Diretório $name já existe, este foi removido.";
}
else{
	//cria um diretório
	mkdir($name);
	echo "Diretório $name foi criado com sucesso!";
}
?>