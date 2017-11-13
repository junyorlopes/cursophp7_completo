<?php
//Operadores de atribuição
//Valor inicial de um carrinho de compras
$valorTotal = 0;
echo "Valor: R$ " . $valorTotal . "<br>";
//Acrecentou um item
$valorTotal += 150;
echo "Valor: R$ " . $valorTotal . "<br>";
//Acrecentou um item
$valorTotal += 250;
echo "Valor: R$ " . $valorTotal . "<br>";
//Acrecentou um item
$valorTotal += 170;
echo "Valor: R$ " . $valorTotal . "<br>";
//Retirou um item
$valorTotal -= 150;
echo "Valor: R$ " . $valorTotal . "<br>";
//Aplicou um desconto de 10%
$valorTotal *= .9;
echo "Valor: R$ " . $valorTotal . "<br>";

?>