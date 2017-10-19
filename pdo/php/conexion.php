<?php
	$user = "root";
	$password = "";
	try{
		$connection = new PDO('mysql:host=localhost;dbname=examenrelations',$user,$password);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
	}
?>