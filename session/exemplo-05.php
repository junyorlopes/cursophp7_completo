<?php

require_once("config.php");

//caminho dos arquivos temporários da sessão
echo "Caminho: " . session_save_path() . "<br>";

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "<br>Sessões desabilitadas.";
	break;
	case PHP_SESSION_NONE:
		echo "<br>Sessões habilitadas, mas nenhuma existi.";
	break;
	case PHP_SESSION_ACTIVE:
		echo "<br>Sessões habilitadas e uma existir.";
	break;
	default:
		echo "<br>OPS!";
	break;
}

?>