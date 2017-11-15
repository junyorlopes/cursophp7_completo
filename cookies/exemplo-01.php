<?php
$data = array("Empresa"=>"José Empreendimentos");
setcookie("NOME_COOKIE", json_encode($data), time() + 3600);
echo "Cookie salvo!";
?>