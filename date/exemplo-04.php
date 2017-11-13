<?php
//mude toda a configuração que tenho para portugues "LC_ALL"
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");//Linux, UTF-8 e Windows
$de = "de";
echo ucfirst(strftime("%A, %e $de %B $de %Y."));

?>