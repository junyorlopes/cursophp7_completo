<?php
$filename = "burger_king_logo.png";
//converte a imagem para binario
$base64 = base64_encode(file_get_contents($filename));
//instancia para deixar a extensão da imagem dinâmica
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
//obtem a extensão dinâmica
$mimetype = $fileinfo->file($filename);
//obtem o link já convertido em binário
$base64encode = "data:$mimetype;base64," . $base64;
?>
<!-- exibe o conteudo --> 
<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>
<img src="<?=$base64encode?>">