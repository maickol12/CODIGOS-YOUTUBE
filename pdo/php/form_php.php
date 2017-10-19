<?php
	require 'conexion.php';
	$response = $connection->prepare("INSERT INTO materias(nombre_mat,creditos,id_carrera)values(:nm,:c,:ic)");
	$response->bindParam(':nm',$_POST['nombre_materia']);
	$response->bindParam(':c',$_POST['creditos']);
	$response->bindParam(':ic',$_POST['id_carrera']);
	$r = $response->execute();
	if($r){
		echo "Si";
	}
?>