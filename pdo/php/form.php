<?php
	require("conexion.php");
	$response = $connection->prepare("SELECT * FROM carreras");
	$response->execute();
?>
<form action="php/form_php.php" method="POST">
	<input type="text" name="nombre_materia" id="nm">
	<input type="text" name="creditos" id="c">
	<select name="id_carrera">
		<?php foreach ($response as $r) {
			echo "<option value=".$r[0].">".$r[0]."</option>";
		} ?>
	</select>
	<input type="submit" value="Enviar">
</form>