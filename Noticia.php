<?php
Class Noticia{
	private $titulo;
	private $texto;
	private $seccion;
	public function get_titulo(){
		return $this->titulo;
	}
	public function get_texto(){
		return $this->texto;
	}
	public function set_titulo($titulo){
		$this->titulo=$titulo;
	}
	public function set_texto($texto){
		$this->titulo=$texto;
	}
	public function Noticia($titulo,$texto){
		$this->titulo=$titulo;
		$this->texto=$texto;
	}
}
?>