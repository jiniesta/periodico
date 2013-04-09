<?php
Class comentario{
	private $usuario;
	private $texto;
	private $fecha;

	public function get_usuario(){
		return $this->usuario;
	}
	public function get_texto(){
		return $this->texto;
	}	
	public function get_fecha(){
		return $this->fecha;
	}

	public function set_usuario($usuario){
		$this->usuario=$usuario;
	}
	public function set_texto($texto){
		$this->usuario=$texto;
	}
	
	public function set_fecha($usuario){
		$this->fecha=$usuario;
	}
	
	public function Noticia($usuario,$texto,$fecha){
		$this->titulo=$usuario;
		$this->texto=$texto;
		$this->fecha=$fecha;
	}
}
?>