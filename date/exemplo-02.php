<form>
	<input type="date" name="data">
	<input type="submit" value="Verificar">
</form>
<?php
	
	$data = $_GET["data"];
	$hoje = date("d/m/Y");

	if(isset($_GET["data"])){

		$ts_dias = strtotime($data) - strtotime($hoje); 
		//CONVERSÃO DE TIMESTAMP PARA DIAS
		$dias = (int)floor($ts_dias / (60 * 60 * 24));
		
		if($dias > 0){
			echo "Faltam " . $dias . " dias."; 
		}
		else if($dias < 0){
			echo "Já faz " . ($dias * -1) . " dias.";
		}
		else if($dias == 0){
			echo "É hoje! "; 
		}
		else {
			echo "Erro!";
		}
		
	}

?>