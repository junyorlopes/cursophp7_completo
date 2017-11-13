<?php
$link = "http://getbootstrap.com/assets/img/bootstrap-stack.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file); 
?>
<img src="<?=$basename?>" style="height: 200px; width: 200px">