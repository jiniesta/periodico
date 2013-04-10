<?php
require 'ManagerNoticia.php';
Class Noticia{

	private $id;
	private $titulo;
	private $subtitulo;
	private $texto;
	private $seccion = array();
	private $importancia = array(); 

	public function get_id(){
		return $this -> id;
	}
	public function get_titulo(){
		return $this -> titulo;
	}
	public function get_subtitulo(){
		return $this -> subtitulo;
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
	public function set_id($id){
		$this -> id = $id;
	}
	public function set_titulo($titulo){
		$this -> titulo = $titulo;
	}
	public function set_subtitulo($subtitulo){
		$this -> subtitulo = $subtitulo;
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

	public function Noticia($titulo,$subtitulo,$texto,$seccion, $importancia){
		$this -> titulo = $titulo;
		$this -> subtitulo=$subtitulo;
		$this -> texto = $texto;
		$this -> seccion = $seccion;		
		$this -> importancia = $importancia;
	}
	
	public function save($con){
		ManagerNoticia::guardarNoticia($this, $con);
	}
	
}
?>