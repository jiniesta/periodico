<?php
	Class SeccionesManager{	
		static function nuevaSeccion($objeto){
			$conexion = mysqli_connect("localhost","root","root");
			
			$sql = "INSERT INTO antartida.seccion VALUES ('','".$objeto -> get_tipo()."','".$objeto -> get_seccion()."')";
			mysqli_query($conexion,$sql);
			
			mysqli_close($conexion);
		}
		static function borrarSeccion($seccion){
			$conexion = mysqli_connect("localhost","root","root");
			
			$sql = "DELETE FROM antartida.seccion WHERE seccion = '$seccion'";
			mysqli_query($conexion,$sql);
			$sql = "DELETE FROM antartida.seccion WHERE tipo = '$seccion'";
			mysqli_query($conexion,$sql);
			
			mysqli_close($conexion);
		}
		static function get_secciones($seccion){
			$conexion = mysqli_connect("localhost","root","root");
			
			$sql = "SELECT * FROM antartida.seccion WHERE tipo = '$seccion' OR seccion = '$seccion'";
			$resultado = mysqli_query($conexion,$sql);
			$secciones = array();

			while($fila = mysqli_fetch_array($resultado)){
				$secciones[$fila["tipo"]][] = $fila["seccion"];
			}

			mysqli_close($conexion);

			return $secciones;
			/*
			$valores = array();
				
			for($i = 0; $i<count($secciones); $i++){
				foreach ($secciones as $key => $value) {
					$valores[$key] = $value;
				}
			}

			foreach ($valores as $key => $value) {
				foreach($value as $clave => $valor){
					$valores_ordenados[$key][$clave] = $valor;
				}
			}*/
//			return $valores;
		}
	}
?>