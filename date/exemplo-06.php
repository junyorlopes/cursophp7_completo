<?php

$dt = new DateTime('now', new DateTimeZone("America/Sao_Paulo"));

$periodo = new DateInterval("P15D");

echo "<b>Data: </b>" . $dt->format("d/m/Y - H:i:s");//antes de incrementar 15 dias

$dt->add($periodo);

echo "<b><br>Data: </b>" . $dt->format("d/m/Y - H:i:s");//após de incrementar 15 dias

?>