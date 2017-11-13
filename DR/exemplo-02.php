<?php
$img = scandir("img");
$data = array();

foreach ($img as $images) {
	if(!in_array($images, array(".",".."))){
		$filename = "img" . DIRECTORY_SEPARATOR . $images;
		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

		array_push($data, $info);
	}
}
echo json_encode($data);
?>