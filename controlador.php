<?php
 	error_reporting(E_ALL);
  	ini_set("display_errors", 1);
	
	include "Seccion.php";
	include "modelo.php";

	$accion = $_GET["action"];
	//Hacer editar seccion

	switch ($accion) {
		case 'crear_seccion':
			include "crear_seccion.php";
			break;
		
		case 'new_seccion':
			$tipo = $_GET["tipo"];	
			$seccion = $_GET["seccion"];	
			$seccion_nueva = new Seccion($tipo,$seccion);
			echo "nueva seccion!";
			SeccionesManager::nuevaSeccion($seccion_nueva);
			echo "seccion introducida en bd!";
			break;

		case 'borrar_seccion':
			include "borrar_seccion.php";
			break;

		case 'delete_seccion':
			$seccion = $_GET["seccion"];
			SeccionesManager::borrarSeccion($seccion);
			echo "seccion borrada!";
			break;

		case 'mostrar_seccion':
			include "mostrar_seccion.php";
			break;

		case 'view_seccion':
			$seccion = $_GET["seccion"];
			$valores = SeccionesManager::get_secciones($seccion);
			foreach ($valores as $key => $value) {
				foreach($value as $sel => $valor){
					echo "$key: $valor<br>";
				}
			}
			break;
		
		default:
			break;
	}
	/*
	$secciones = SeccionesManager::get_secciones();
	
	$valores = array();
	$valores_ordenados = array();
	
	for($i = 0; $i<count($secciones); $i++){
		foreach ($secciones as $key => $value) {
			$valores[$key] = $value;
			//foreach ($key as $keyy => $value) {
			//	echo "$keyy : $value<br>";
			//}
			//echo "key: $key / valor: $value<br>";
		}
	}

	foreach ($valores as $key => $value) {
		foreach($value as $clave => $valor){
			$valores_ordenados[$key][$clave] = $valor;
		}
	}
	*/
?>
<!--
<form action="" method="POST">
	<select>
		<option value="nueva">Nueva seccion</option>
		<option value="borrar">Borra seccion</option>
	</select>
</form>
-->