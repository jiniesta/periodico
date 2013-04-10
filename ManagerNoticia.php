<?php
class ManagerNoticia{
	static function guardarNoticia($noticia,$conexion){
		$sql="select id_seccion from seccion where id_seccion='".$noticia->get_seccion()."'";
		if(mysqli_query($conexion,$sql)){
			$sql="insert into noticia values (NULL,'".$noticia->get_titulo()."','".$noticia->get_subtitulo()."','".$noticia->get_texto()."','".date('Y-m-d')."')";
			mysqli_query($conexion,$sql);
			$sql="insert into noticia_seccion values ('".mysqli_insert_id($conexion)."','".$noticia->get_seccion()."','".$noticia->get_importancia()."')";
			mysqli_query($conexion,$sql);
		}else{
			echo "No existe la sección indicada";
		}
	}
	static function recuperarNoticia($id,$conexion){
		$sql="select * from noticia where id='$id'";
		if($resultado=mysqli_query($conexion,$sql)){
			$fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		}else{
			echo "No existe la noticia indicada";
		}
	}
}
?>