<?php
Class comentario{
	private $usuario;
	private $texto;
	private $fecha;
<<<<<<< HEAD
=======

>>>>>>> 11b49d9baf0331a5edd52e2979fcc2786e52977d
	public function get_usuario(){
		return $this->usuario;
	}
	public function get_texto(){
		return $this->texto;
<<<<<<< HEAD
	}
	
	public function get_fecha(){
		return $this->fecha;
	}
=======
	}	
	public function get_fecha(){
		return $this->fecha;
	}

>>>>>>> 11b49d9baf0331a5edd52e2979fcc2786e52977d
	public function set_usuario($usuario){
		$this->usuario=$usuario;
	}
	public function set_texto($texto){
		$this->usuario=$texto;
	}
	
	public function set_fecha($usuario){
		$this->fecha=$usuario;
	}
<<<<<<< HEAD
=======
	
>>>>>>> 11b49d9baf0331a5edd52e2979fcc2786e52977d
	public function Noticia($usuario,$texto,$fecha){
		$this->titulo=$usuario;
		$this->texto=$texto;
		$this->fecha=$fecha;
	}
}
?>