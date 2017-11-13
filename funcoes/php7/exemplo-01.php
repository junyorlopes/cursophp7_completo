<?php

function somar(int ... $valores){
	return array_sum($valores);
}

echo somar(1,1,1) . "<br>";
echo somar(2,2,2) . "<br>";
echo somar(3,3,3) . "<br>";

?>