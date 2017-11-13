<?php

$total = 150;
$desconto = .9;

echo "Desconto: <br>";

do {
	$total *= $desconto;
	echo "R$ " . $total . "<br>"; 
} while ($total > 100);
echo "<b>Total: R$ " . $total . "</b>";
?>