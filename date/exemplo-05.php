<form>
	<!---->
	<select id="timeZone" name="timeZone" onchange="this.form.submit()">
		<option value="Africa/Malabo">Malabo - Africa</option>
		<option value="Asia/Hong_Kong">Hong Kong - Ásia</option>
		<option value="America/Sao_Paulo">São Paulo - America do Sul</option>
	</select>
</form>

<?php

$timeZone = $_GET["timeZone"];

if($_GET["timeZone"]){
	
	$dt = new DateTime('now', new DateTimeZone("$timeZone"));

	echo "<b>Data: </b>" . $dt->format("d/m/Y");
	echo "<br><b>Hora: </b>" . $dt->format("H:i:s");

}

?>