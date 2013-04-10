<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require 'Noticia.php';
	
	$host="localhost";
	$username="root";
	$password="root";
	$dbname="antartida";
	$conexion=mysqli_connect($host, $username, $password, $dbname);
	
	$noticia1=new Noticia("Lorenzo gana", "Rossi segundo", "Rossi no pudo con el vigente campeón en Qatar", 3, 3);
	$noticia1->save($conexion);
	
	
	
	mysqli_close($conexion);
?>