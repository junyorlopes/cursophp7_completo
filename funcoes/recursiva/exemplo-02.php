<?php

function factorial($number) {
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}
$numero = 4;
echo "Fatorial de $numero: " . factorial($numero);

?>