<?php
//mude toda a configuração que tenho para portugues "LC_ALL"
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");//Linux, UTF-8 e Windows
$file = fopen("log.txt", "a+");
fwrite($file, date("d/m/Y H:i:s") . "\r\n");
fclose($file);
echo "Arquivo criado com sucesso!"; 
?>