<?php
//aqui é o arquivo convertido em JSON, porém poderia ser uma URL ou caminho que se deseja converter
$json = '[{"nome":"Junyor","idade":21},{"nome":"Jos\u00e9","idade":22}]';
//conversão do arquivo JSON para um array
$data = json_decode($json, true);//caso o TRUE não seja inserido, ao invés da conversão ser um array será um objeto 

var_dump($data);

?>