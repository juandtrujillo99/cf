<?php

abstract class Validador {

	protected $aviso_inicio;
	protected $aviso_cierre;

	protected $titulo;
	protected $url;
	protected $intensidad;
	protected $video;
	protected $imagen;
	protected $texto;

	protected $error_titulo;
	protected $error_url;
	protected $error_intensidad;
	protected $error_video;
	protected $error_imagen;
	protected $error_texto;

	function __construct(){
	}

	protected function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)) {
			return true;
		}
		else{
			return false;
		}
	}

	protected function validar_titulo($conexion, $titulo){
		if (!$this -> variable_iniciada($titulo)) {
			return "Escribe un titulo";
		}
		else{
			$this -> titulo = $titulo;
		}

		if (strlen($titulo) >255) {
			return "El titulo no puede ocupar más de 255 caracteres";
		}

		/*if (RepositorioRutina :: titulo_existe($conexion, $titulo)) {
			return "Ya existe una rutina con ese titulo, escoge uno diferente";
		}*/
	}

	protected function validar_intensidad($conexion, $intensidad){
		if (!$this -> variable_iniciada($intensidad)) {
			return "Escoge la intensidad";
		}
		else{
			$this -> intensidad = $intensidad;
		}
	}

	protected function validar_video($conexion, $video){
		if (!$this -> variable_iniciada($video)) {
			return "Inserta el código del video que quieres que aparezca en tu rutina";
		}
		else{
			$this -> video = $video;
		}

		$video_tratada = str_replace(' ', '', $video);
		$video_tratada = preg_replace('/\s+/', '', $video_tratada);
		
		if (strlen($video) != strlen($video_tratada)) {
			return "El código del video no puede contener espacios vacios";
		}
	}

	protected function validar_url($conexion, $url){
		if (!$this -> variable_iniciada($url)) {
			return "inserta la url con la que quieres que aparezca tu rutina";
		}
		else{
			$this -> url = $url;
		}

		$url_tratada = str_replace(' ', '', $url);
		$url_tratada = preg_replace('/\s+/', '', $url_tratada);


		if (strlen($url) != strlen($url_tratada)) {
			return "La URL no puede contener espacios vacios, separalos con guiones (-)";
		}
		if (RepositorioRutina :: url_existe($conexion, $url)) {
			return "Esa URL ya fue elegida, escoge otra";
		}

	}
	protected function validar_imagen($conexion, $imagen){
		if (!$this -> variable_iniciada($imagen)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			$this -> imagen = $imagen;
		}
		if (RepositorioRutina :: imagen_existe($conexion, $imagen)) {
			$fechaActual = date("d-m-Y").time();
		    $nuevoNombre = $fechaActual ."$imagen";
		    rename("$imagen", "$nuevoNombre");
		   	$this -> imagen = $imagen;
		}
	}

	protected function validar_texto($conexion, $texto){
		if (!$this -> variable_iniciada($texto)) {
			return "Este cuadro no puede estar vacio";
		}
		else{
			$this -> texto = $texto;
		}
	}
	public function obtener_titulo(){
		return $this -> titulo;
	}
	public function obtener_url(){
		return $this -> url;
	}
	public function obtener_intensidad(){
		return $this -> intensidad;
	}
	public function obtener_video(){
		return $this -> video;
	}
	public function obtener_imagen(){
		return $this -> imagen;
	}
	public function obtener_texto(){
		return $this -> texto;
	}

	public function mostrar_titulo(){
		if ($this -> titulo != "") {
			echo 'value = "' . $this -> titulo . '"';
		}
	}
	public function mostrar_url(){
		if ($this -> url != "") {
			echo 'value = "' . $this -> url . '"';
		}
	}
	public function mostrar_intensidad(){
		if ($this -> intensidad != "") {
			echo 'value = "' . $this -> intensidad . '"';
		}
	}
	public function mostrar_video(){
		if ($this -> video != "") {
			echo 'value = "' . $this -> video . '"';
		}
	}
	public function mostrar_imagen(){
		if ($this -> imagen != "") {
			echo 'value = "' . $this -> imagen . '"';
		}
	}
	public function mostrar_texto(){
		if ($this -> texto != "" && strlen(trim($this -> texto)) > 0) {
			echo $this -> texto;
		}
	}

	public function mostrar_error_titulo(){
		if ($this -> error_titulo != "") {
			echo $this -> aviso_inicio . $this -> error_titulo . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_url(){
		if ($this -> error_url != "") {
			echo $this -> aviso_inicio . $this -> error_url . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_intensidad(){
		if ($this -> error_intensidad != "") {
			echo $this -> aviso_inicio . $this -> error_intensidad . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_video(){
		if ($this -> error_video != "") {
			echo $this -> aviso_inicio . $this -> error_video . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_imagen(){
		if ($this -> error_imagen != "") {
			echo $this -> aviso_inicio . $this -> error_imagen . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_texto(){
		if ($this -> error_texto != "") {
			echo $this -> aviso_inicio . $this -> error_texto . $this -> aviso_cierre;
		}
	}

	public function rutina_valida(){
		if ($this -> error_titulo == "" && $this -> error_url == "" && $this -> error_intensidad == "" && $this -> error_video == "" && $this -> error_imagen == "" && $this -> error_texto == "") {
			return true;
		}
		else {
			return false;
		}
	}

}
