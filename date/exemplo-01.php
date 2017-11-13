<?php

echo "Dia: " . date("d/D") . "<br>";
echo "Mês: " . date("m/M") . "<br>";
echo "Ano: " . date("y/Y") . "<br>";
echo "Horário: " . date("H:i:s") . "<br>";
$date = date("d, D M Y");

echo $date . "<br>";
//Quantidade de segundos desde 1° de janeiro de 1970
echo "Timestamp: " . time() . "<br>";
echo "Fixando um horário: " . date("d/m/Y H:i:s", 1507639454) . "<br>";
?>