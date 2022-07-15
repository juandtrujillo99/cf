<?php
include_once 'RepositorioRutina.inc.php';
include_once 'Validador.inc.php';

class ValidadorRutina extends Validador {
	
	public function __construct($url, $intensidad, $video, $imagen, $titulo, $texto, $conexion) {
		$this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
		$this -> aviso_cierre = "</div>";
		
		$this -> titulo = "";
		$this -> intensidad = "";
		$this -> video = "";
		$this -> imagen = "";
		$this -> url = "";
		$this -> texto = "";
		
		$this -> error_titulo = $this -> validar_titulo($conexion, $titulo);
		$this -> error_intensidad = $this -> validar_intensidad($conexion, $intensidad);
		$this -> error_video = $this -> validar_video($conexion, $video);
		$this -> error_imagen = $this -> validar_imagen($conexion, $imagen);
		$this -> error_url = $this -> validar_url($conexion, $url);
		$this -> error_texto = $this -> validar_texto($conexion, $texto);
	}
}