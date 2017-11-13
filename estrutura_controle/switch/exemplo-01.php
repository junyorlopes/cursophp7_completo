<?php 

$diaSemana = date("w"); 

switch ($diaSemana) {
	case 0:
		echo "Hoje é domingo.";
	break;
	case 1:
		echo "<br>Hoje é segunda-feira.";
	break;
	case 2:
		echo "<br>Hoje é terça-feira.";
	break;
	case 3:
		echo "<br>Hoje é quarta-feira.";
	break;
	case 4:
		echo "<br>Hoje é quinta-feira.";
	break;
	case 5:
		echo "<br>Hoje é sexta'-feira.";
	break;
	case 6:
		echo "<br>Hoje é sábado.";
	break;
	default:
		echo "Data inválida!";
	break;
}

?>