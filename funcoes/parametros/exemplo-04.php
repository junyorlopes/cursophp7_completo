<?php

$pessoa = array(
	"nome"=>'Junyor',
	"idade"=>21);

foreach ($pessoa as $key => &$value) {
	
	if (is_int($value)){
		$value += 10;
	}

	echo $value . "<br>";
}

print_r($pessoa);

?>