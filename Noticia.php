<?php
Class Noticia{

	private $titulo;
	private $texto;
	private $seccion = array();
	private $importancia = array(); 

	public function get_titulo(){
		return $this -> titulo;
	}
	public function get_texto(){
		return $this -> texto;
	}
	public function get_seccion(){
		return $this -> seccion;
	}
	public function get_importancia(){
		return $this -> importancia;
	}

	public function set_titulo($titulo){
		$this -> titulo = $titulo;
	}
	public function set_texto($texto){
		$this -> texto = $texto;
	}
	public function set_seccion($seccion){
		$this -> seccion = $seccion;
	}
	public function set_importancia($importancia){
		$this -> importancia[] = $importancia;
	}

	public function Noticia($titulo,$texto,$seccion){
		$this -> titulo = $titulo;
		$this -> texto = $texto;
		$this -> seccion[] = $tipo;		
		$this -> importancia[] = $importancia;
	}
}
?>