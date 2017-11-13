<?php
//Operadores de comparação
$a = 30.0;
$b = 30;

echo "<b>" . $a . " é maior que " . $b . "? " . "</b><br>";
var_dump($a > $b);
echo "<br><b>" . $a . " é menor que " . $b . "? " . "</b><br>";
var_dump($a < $b);
echo "<br><b>" . $a . " é igual que " . $b . "? " . "</b><br>";
var_dump($a == $b);
echo "<br><b>" . $a . " é diferente que " . $b . "? " . "</b><br>";
var_dump($a != $b);
echo "<br><b>" . $a . " é do mesmo tipo que " . $b . "? " . "</b><br>";
var_dump($a === $b);
echo "<br><b>" . $a . " é de tipo diferente que " . $b . "? " . "</b><br>";
var_dump($a !== $b);

echo "<br><br><b>Spaceship - PHP-7</b>"; 
echo "<br><b>" . $a . " é maior, menor ou igual a " . $b . "? " . "</b><br>";
echo "<i>Se maior, return 1</i><br>";
echo "<i>Se igual, return 0</i><br>";
echo "<i>Se menor, return -1</i><br>";
var_dump($a <=> $b);

echo "<br><br><b>Null-coalescing - PHP-7</b><br>"; 
$a = null;
$b = 50;
$c = null;
echo "<b>Mostre o primeiro valor diferente de NULL entre A, B e C: </b><br>" . ($a ?? $b ?? $c) . "<br>";
?>