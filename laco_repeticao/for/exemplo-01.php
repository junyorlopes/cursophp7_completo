<?php 

for($i = 0; $i <= 10; $i++){
	
	for($j = 0; $j <= 10; $j++){
		echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
	}
	echo "<br>";
	//caso queira excluir um número do laço
	if ($i > 4 && $i < 6) continue;
}

?>