<form method="POST" enctype="multipart/form-data">
	<input type="file" name="file-upload">
	<button type="submit">Enviar</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
	$file = $_FILES["file-upload"];
	if($file["error"]){
		throw new Exception("Erro: ", $file["error"]);
	}
	$dirUpload = "uploads";
	if(!is_dir($dirUpload)){
		mkdir("uploads");
	}
	if(move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])){
		echo "Upload concluido com sucesso!";
	}
	else {
		throw new Exception("Não foi possível realizar o upload.");
		
	}
	
}
?>