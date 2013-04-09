<?php
Class Portada{

	private $tipo = array(); //general o de seccion

	public function get_tipo(){
		return $this -> tipo;
	}

	public function set_tipo($tipo){
		$this -> tipo[] = $tipo;
	}

	public function Portada($importancia,$tipo){
		$this -> tipo[] = $tipo;		
	}
}
?>