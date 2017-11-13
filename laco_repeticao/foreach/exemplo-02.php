<form>
	<input type="text" name="nome">
	<input type="date" name="data">
	<input type="submit" value="enviar">
</form>

<?php  
	
	if(isset($_GET)){
		foreach ($_GET as $key => $value) {
			echo "Nome do campo: " . $key;
			echo "<br>Valor do campo: " . $value;
			echo "<hr>";
		}
	}

?>