<?php
//parametros por valor
$a = 10;

function porValor($a){
	return $a += 50;
}
echo "<b>Por valor</b>";
echo "<br>A: " . porValor($a);
echo "<br>A: $a ";

//parametros por referencia
$b = 10;

function porReferencia(&$b){
	return $b += 50;
}
echo "<br><b>Por referencia</b>";
echo "<br>B: " . porReferencia($b);
echo "<br>B: $b ";
?>