<form method="POST">
	<input type="text" name="cep">
	<button type="submit">Consultar</button>
</form>
<?php
	$cep = $_POST["cep"];
	if(!isset($cep)){
		echo "Insira um CEP no campo de busca.";
	}
	else {
		$link = "https://viacep.com.br/ws/$cep/json/";
		$ch = curl_init($link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);
		curl_close($ch);
		$data = json_decode($response, true);
		echo "<br><b>CEP: </b>" . $data["cep"];
		echo "<br><b>Logradouro: </b>" . $data["logradouro"];
		echo "<br><b>Complemento: </b>" . $data["complemento"];
		echo "<br><b>Bairro: </b>" . $data["bairro"];
		echo "<br><b>Localidade: </b>" . $data["localidade"];
		echo "<br><b>UF: </b>" . $data["uf"];
	}
?>