<?php
Class Seccion{
	
	private $tipo;
	private $seccion;

	public function get_tipo(){
		return $this -> $tipo;
	}	
	public function get_seccion(){
		return $this -> $seccion;
	}

	public function set_tipo($tipo){
		$this -> tipo = $tipo;
	}	
	public function set_seccion(){
		$this -> seccion = $seccion;
	}

	public function Seccion($tipo,$seccion){
		$this -> tipo = $tipo;
		$this -> seccion = $seccion;
	}
}
?>