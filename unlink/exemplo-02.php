<?php
if(!is_dir("imagens")){
	mkdir("imagens");
}
else {
	foreach (scandir("imagens") as $itens) {
		if(!in_array($itens, array(".",".."))){
			unlink("imagens/" . $itens);
		}
	}
}
?>