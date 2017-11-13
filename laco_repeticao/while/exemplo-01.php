<form>
	<input type="number" name="numero_aposta">
	<input type="submit" value="Sortear">
</form>

<?php

$condicao = true;
$numero_aposta = $_GET['numero_aposta'];

if(isset($numero_aposta) && $numero_aposta > 0 && $numero_aposta < 11){
	while ($condicao) {
		//sorteia números aleatórios
		$numero = rand(1, 10);
		echo $numero . " <br>";
		if($numero == $numero_aposta){
			echo "Seu número foi sorteado!<br>";
			$condicao = false;
		}
	}
}

?>